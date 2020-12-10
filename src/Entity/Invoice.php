<?php

namespace App\Entity;

use App\Repository\InvoiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvoiceRepository::class)
 */
class Invoice
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="internal_invoice_id")
     */
    private $internalInvoiceId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="invoice_amount")
     */
    private $invoiceAmount;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="sell_price")
     */
    private $sellPrice;

    /**
     * @ORM\Column(type="datetime", nullable=true, name="due_on")
     */
    private $dueOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="createdAt", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * constructor.
     */
    function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInternalInvoiceId(): ?string
    {
        return $this->internalInvoiceId;
    }

    public function setInternalInvoiceId(?string $internalInvoiceId): self
    {
        $this->internalInvoiceId = $internalInvoiceId;

        return $this;
    }

    public function getInvoiceAmount(): ?string
    {
        return $this->invoiceAmount;
    }

    public function setInvoiceAmount(?string $invoiceAmount): self
    {
        $this->invoiceAmount = $invoiceAmount;

        return $this;
    }

    public function getDueOn(): ?\DateTimeInterface
    {
        return $this->dueOn;
    }

    public function setDueOn(?\DateTimeInterface $dueOn): self
    {
        $this->dueOn = $dueOn;

        return $this;
    }

    /**
     * Set createdAt.
     *
     * @param string|null $createdAt
     *
     * @return Address
     */
    public function setCreatedAt( $createdAt = null )
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getSellPrice(): ?string
    {
        return $this->sellPrice;
    }

    public function setSellPrice(?string $sellPrice): self
    {
        $this->sellPrice = $sellPrice;

        return $this;
    }
}
