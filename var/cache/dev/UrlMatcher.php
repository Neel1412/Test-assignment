<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/user' => [[['_route' => 'api_user', '_controller' => 'App\\Controller\\ApiUserController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::indexAction'], null, null, null, false, false, null]],
        '/add-invoice' => [[['_route' => 'add_inVoice_via_csv', '_controller' => 'App\\Controller\\DashboardController::addInvoiceAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/user\\-(?'
                    .'|delete/([^/]++)(*:71)'
                    .'|update/([^/]++)(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:135)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [[['_route' => 'api_user_delete', '_controller' => 'App\\Controller\\ApiUserController::delete'], ['id'], null, null, false, true, null]],
        135 => [
            [['_route' => 'api_user_update', 'name' => null, 'date' => null, 'address' => null, '_controller' => 'App\\Controller\\ApiUserController::update'], ['id', 'name', 'date', 'address'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
