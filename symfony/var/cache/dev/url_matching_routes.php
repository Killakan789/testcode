<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog' => [[['_route' => 'blog_list', '_controller' => 'App\\Controller\\BlogController::list'], null, null, null, false, false, null]],
        '/customer/add' => [[['_route' => 'add_customer', '_controller' => 'App\\Controller\\CustomerController::add'], null, ['POST' => 0], null, false, false, null]],
        '/customer' => [
            [['_route' => 'get_all_customers', '_controller' => 'App\\Controller\\CustomerController::getAll'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'getAll', '_controller' => 'App\\Controller\\CustomerController::getAll'], null, null, null, true, false, null],
        ],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\DefaultController::contact'], null, null, null, false, false, 1]],
        '/main/number' => [[['_route' => 'app_main_number', '_controller' => 'App\\Controller\\MainController::number'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/posts/([^/]++)(?'
                    .'|(*:64)'
                .')'
                .'|/customer/(?'
                    .'|([^/]++)(*:93)'
                    .'|update/([^/]++)(*:115)'
                    .'|delete/([^/]++)(*:138)'
                    .'|add(*:149)'
                    .'|([^/]++)(*:165)'
                    .'|update/([^/]++)(*:188)'
                    .'|delete/([^/]++)(*:211)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        64 => [
            [['_route' => 'app_blogapi_show', '_controller' => 'App\\Controller\\BlogApiController::show'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [['_route' => 'app_blogapi_edit', '_controller' => 'App\\Controller\\BlogApiController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        93 => [[['_route' => 'get_one_customer', '_controller' => 'App\\Controller\\CustomerController::get'], ['id'], ['GET' => 0], null, false, true, null]],
        115 => [[['_route' => 'update_customer', '_controller' => 'App\\Controller\\CustomerController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        138 => [[['_route' => 'delete_customer', '_controller' => 'App\\Controller\\CustomerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        149 => [[['_route' => 'add', '_controller' => 'App\\Controller\\CustomerController::add'], [], null, null, false, false, null]],
        165 => [[['_route' => 'get', '_controller' => 'App\\Controller\\CustomerController::get'], ['id'], null, null, false, true, null]],
        188 => [[['_route' => 'update', '_controller' => 'App\\Controller\\CustomerController::update'], ['id'], null, null, false, true, null]],
        211 => [
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
