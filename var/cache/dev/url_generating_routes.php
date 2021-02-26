<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\AuthController::register'], [], [['text', '/register']], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\AuthController::api'], [], [['text', '/api']], [], []],
    'api_login_check' => [[], ['_controller' => 'App\\Controller\\AuthController::api'], [], [['text', '/login']], [], []],
    'api_get_me' => [[], ['_controller' => 'App\\Controller\\AuthController::me'], [], [['text', '/api/me']], [], []],
    'create_product' => [[], ['_controller' => 'App\\Controller\\ProductController::create'], [], [['text', '/admin/products']], [], []],
];