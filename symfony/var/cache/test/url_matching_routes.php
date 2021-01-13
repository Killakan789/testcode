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
                .'|/api/posts/([^/]++)(?'
                    .'|(*:29)'
                .')'
                .'|/customer/(?'
                    .'|([^/]++)(*:58)'
                    .'|update/([^/]++)(*:80)'
                    .'|delete/([^/]++)(*:102)'
                    .'|add(*:113)'
                    .'|([^/]++)(*:129)'
                    .'|update/([^/]++)(*:152)'
                    .'|delete/([^/]++)(*:175)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [
            [['_route' => 'app_blogapi_show', '_controller' => 'App\\Controller\\BlogApiController::show'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [['_route' => 'app_blogapi_edit', '_controller' => 'App\\Controller\\BlogApiController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        58 => [[['_route' => 'get_one_customer', '_controller' => 'App\\Controller\\CustomerController::get'], ['id'], ['GET' => 0], null, false, true, null]],
        80 => [[['_route' => 'update_customer', '_controller' => 'App\\Controller\\CustomerController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        102 => [[['_route' => 'delete_customer', '_controller' => 'App\\Controller\\CustomerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        113 => [[['_route' => 'add', '_controller' => 'App\\Controller\\CustomerController::add'], [], null, null, false, false, null]],
        129 => [[['_route' => 'get', '_controller' => 'App\\Controller\\CustomerController::get'], ['id'], null, null, false, true, null]],
        152 => [[['_route' => 'update', '_controller' => 'App\\Controller\\CustomerController::update'], ['id'], null, null, false, true, null]],
        175 => [
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
