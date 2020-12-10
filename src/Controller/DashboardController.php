<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Entity\Invoice;
use \DateTime;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="dashboard")
     */
    public function indexAction()
    {
        $data = [];
        $em   = $this->getDoctrine()->getManager();

        $objInvoice = $em->getRepository( 'App:Invoice' )->findAll();

        $data = array(
            'objInvoice' => $objInvoice,
        );

        return $this->render( 'Dashboard/index.html.twig', $data );
    }

    /**
     * @Route("/add-invoice", name="add_inVoice_via_csv")
     */
    public function addInvoiceAction( Request $request )
    {
        $response = array();
        $em       = $this->getDoctrine()->getManager();

        if (!empty( $request->files->get( 'csvfile' )))
        {
            $csvArrStatus = $this->checkCsvValidation( $request );

            if ( $csvArrStatus['status'] == 'error')
            {
                $isValid     = false;
                $response['status'] = 'error';
                $response['message'] = $csvArrStatus['message'];
                goto errorMessage;
            }
            else
            {
                $isValid  = true;
                $validInvoices = $csvArrStatus['invoices'];

                if( $isValid )
                {
                    foreach ($validInvoices as $invoice) {

                        $before30DaysDate = date('Y-m-d',strtotime(date('Y-m-d').' - 30 days'));
                        $dueOnDate = date('Y-m-d',strtotime($invoice['dueOn']));
                        
                        if( $dueOnDate <= $before30DaysDate )
                        {
                            $sellPrice = $invoice['invoiceAmount'] * 0.3;
                        }
                        else
                        {
                            $sellPrice = $invoice['invoiceAmount'] * 0.5;
                        }

                        $objInvoice = new Invoice();
                        $objInvoice->setInternalInvoiceId( $invoice['internalInvoiceId'] );
                        $objInvoice->setInvoiceAmount( $invoice['invoiceAmount'] );
                        $objInvoice->setSellPrice( $sellPrice );
                        $objInvoice->setDueOn( new DateTime($invoice['dueOn']) );
                        $em->persist( $objInvoice );
                        $em->flush();
                    }
                    
                    $response['status'] = 'success';
                    $response['message'] = 'Invoice added successfully.';
                }
            }
        }
        else
        {
            $response['status'] = 'error';
            $response['message'] = 'Please upload csvfile.';
        }

        errorMessage:

        return new JsonResponse( $response );
    }

    private function checkCsvValidation( $request )
    {
        $final             = array();
        $errors            = array();
        $allowed_filetypes = array( 'text/csv','text/plain');

        $em          = $this->getDoctrine()->getManager();

        if ( ! empty( $request->files->get( 'csvfile' ) ))
        {
            if ( in_array( $request->files->get( 'csvfile' )->getMimeType(), $allowed_filetypes ) )
            {
                $filePath = $request->files->get( 'csvfile' )->getPathName();
                $titles   = array();
                $body     = array();

                $csv       = $this->parseCsv( $request->files );
                $csvDatas  = $csv->data;
                $csvTitles = $csv->titles;

                if ( ( $handle = fopen( $filePath, "r" ) ) !== false )
                {
                    $key = '';
                    if ( ! empty( $csvTitles[0] ) )
                    {
                        $internalInvoiceId  = isset($csvTitles[0]) && $csvTitles[0] == 'internalInvoiceId' ? $csvTitles[0] : 'internalInvoiceId' ;
                        $invoiceAmount      = isset($csvTitles[1]) && $csvTitles[1] == 'invoiceAmount' ? $csvTitles[1] : 'invoiceAmount' ;
                        $dueOn              = isset($csvTitles[2]) && $csvTitles[2] == 'dueOn' ? $csvTitles[2] : 'dueOn' ;
                        $titles = preg_replace( '/\s*,\s*/', ',', $csvTitles[0] );
                        $titles = preg_replace( '#\s+#', ',', trim( $titles ) );
                        $titles = explode( ',', $titles );
                    }

                    foreach ( $csvDatas as $data )
                    {
                        if( empty( $data[ $internalInvoiceId ] ) && empty( $data[ $invoiceAmount ] ) && empty( $data[ $dueOn ] ) )
                        {
                            continue;
                        }

                        if( empty( $data[ $internalInvoiceId ] ) || empty( $data[ $invoiceAmount ] ) || empty( $data[ $dueOn ] ) )
                        {
                            $errors['status']  = 'error';
                            $errors['message'] = 'Your upload failed because you have included a blank internalInvoiceId, invoiceAmount or dueOn date in your CSV file. Please correct this and re-upload your file.';
                            break;
                        }
                        else
                        {
                            $body['internalInvoiceId']  = $data[ $internalInvoiceId ];
                            $body['invoiceAmount']      = $data[ $invoiceAmount ];
                            $body['dueOn']              = $data[ $dueOn ];
                            $final[] = $body;
                        }
                    }

                    
                    if ( empty( $final ) )
                    {
                        $errors['status']  = 'error';
                        $errors['message'] = 'Your upload failed because you have not included all the mandatory fields in the csv file. Please correct and re-upload your file.';
                    }
                }
                else
                {
                    $errors['status']  = 'error';
                    $errors['message'] = 'Your upload failed because we were not able to process your csv file. Please correct and re-upload your file.';
                }
            }
            else
            {
                $errors['status']  = 'error';
                $errors['message'] = 'Your upload failed because you have not uploaded a csv file. Please correct and re-upload your file.';
            }
        }

        if ( empty( $errors['status'] ) )
        {
            $errors['status']  = 'success';
            $errors['invoices'] = $final;
        }

        return $errors;
    }

    /**
     * @param $files
     *
     * @return array
     */
    private function parseCsv($files, $filename = '')
    {
        if( $filename > '')
        {
            $csv = new \ParseCsv\Csv($filename);
        }
        else
        {
            $csv = new \ParseCsv\Csv($files->get('csvfile')->getPathName());
        }
        return $csv;
    }
}
