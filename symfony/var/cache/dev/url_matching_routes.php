<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog_list', '_controller' => 'App\\Controller\\BlogController::list'], null, null, null, false, false, null]],
        '/customer/add' => [[['_route' => 'add_customer', '_controller' => 'App\\Controller\\CustomerController::add'], null, ['POST' => 0], null, false, false, null]],
        '/customer' => [
            [['_route' => 'get_all_customers', '_controller' => 'App\\Controller\\CustomerController::getAll'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'getAll', '_controller' => 'App\\Controller\\CustomerController::getAll'], null, null, null, true, false, null],
        ],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\DefaultController::contact'], null, null, null, false, false, 1]],
        '/main/number' => [[['_route' => 'app_main_number', '_controller' => 'App\\Controller\\MainController::number'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api/posts/([^/]++)(?'
                    .'|(*:191)'
                .')'
                .'|/customer/(?'
                    .'|([^/]++)(*:221)'
                    .'|update/([^/]++)(*:244)'
                    .'|delete/([^/]++)(*:267)'
                    .'|add(*:278)'
                    .'|([^/]++)(*:294)'
                    .'|update/([^/]++)(*:317)'
                    .'|delete/([^/]++)(*:340)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [
            [['_route' => 'app_blogapi_show', '_controller' => 'App\\Controller\\BlogApiController::show'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null],
            [['_route' => 'app_blogapi_edit', '_controller' => 'App\\Controller\\BlogApiController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        221 => [[['_route' => 'get_one_customer', '_controller' => 'App\\Controller\\CustomerController::get'], ['id'], ['GET' => 0], null, false, true, null]],
        244 => [[['_route' => 'update_customer', '_controller' => 'App\\Controller\\CustomerController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        267 => [[['_route' => 'delete_customer', '_controller' => 'App\\Controller\\CustomerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        278 => [[['_route' => 'add', '_controller' => 'App\\Controller\\CustomerController::add'], [], null, null, false, false, null]],
        294 => [[['_route' => 'get', '_controller' => 'App\\Controller\\CustomerController::get'], ['id'], null, null, false, true, null]],
        317 => [[['_route' => 'update', '_controller' => 'App\\Controller\\CustomerController::update'], ['id'], null, null, false, true, null]],
        340 => [
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
