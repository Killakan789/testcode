<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/customer/add' => [[['_route' => 'add_customer', '_controller' => 'App\\Controller\\CustomerController::add'], null, ['POST' => 0], null, false, false, null]],
        '/customer' => [
            [['_route' => 'get_all_customers', '_controller' => 'App\\Controller\\CustomerController::getAll'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'getAll', '_controller' => 'App\\Controller\\CustomerController::getAll'], null, null, null, true, false, null],
        ],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, 1]],
        '/main/number' => [[['_route' => 'app_main_number', '_controller' => 'App\\Controller\\MainController::number'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'indexadmin', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admindashboard', '_controller' => 'App\\Controller\\AdminController::adminDashboard'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/customer/(?'
                    .'|([^/]++)(*:28)'
                    .'|update/([^/]++)(*:50)'
                    .'|delete/([^/]++)(*:72)'
                    .'|add(*:82)'
                    .'|([^/]++)(*:97)'
                    .'|update/([^/]++)(*:119)'
                    .'|delete/([^/]++)(*:142)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [[['_route' => 'get_one_customer', '_controller' => 'App\\Controller\\CustomerController::get'], ['id'], ['GET' => 0], null, false, true, null]],
        50 => [[['_route' => 'update_customer', '_controller' => 'App\\Controller\\CustomerController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        72 => [[['_route' => 'delete_customer', '_controller' => 'App\\Controller\\CustomerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        82 => [[['_route' => 'add', '_controller' => 'App\\Controller\\CustomerController::add'], [], null, null, false, false, null]],
        97 => [[['_route' => 'get', '_controller' => 'App\\Controller\\CustomerController::get'], ['id'], null, null, false, true, null]],
        119 => [[['_route' => 'update', '_controller' => 'App\\Controller\\CustomerController::update'], ['id'], null, null, false, true, null]],
        142 => [
            [['_route' => 'delete', '_controller' => 'App\\Controller\\CustomerController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    static function ($condition, $context, $request) { // $checkCondition
        switch ($condition) {
            case 1: return (in_array($context->getMethod(), [0 => "GET", 1 => "HEAD"]) && preg_match("/firefox/i", $request->headers->get("User-Agent")));
        }
    },
];
