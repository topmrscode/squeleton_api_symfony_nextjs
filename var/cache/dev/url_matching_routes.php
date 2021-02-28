<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\AuthController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\AuthController::api'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'api_login_check', '_controller' => 'App\\Controller\\AuthController::api'], null, ['POST' => 0], null, false, false, null]],
        '/api/me' => [[['_route' => 'api_get_me', '_controller' => 'App\\Controller\\AuthController::me'], null, ['GET' => 0], null, false, false, null]],
        '/admin/products' => [[['_route' => 'create_product', '_controller' => 'App\\Controller\\ProductController::create'], null, ['POST' => 0], null, false, false, null]],
        '/products' => [[['_route' => 'list_products', '_controller' => 'App\\Controller\\ProductController::list'], null, ['GET' => 0], null, false, false, null]],
        '/carts/products' => [[['_route' => 'modify_products_in_cart', '_controller' => 'App\\Controller\\CartController::modifyProducts'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
