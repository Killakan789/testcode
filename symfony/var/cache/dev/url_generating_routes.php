<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'add_customer' => [[], ['_controller' => 'App\\Controller\\CustomerController::add'], [], [['text', '/customer/add']], [], []],
    'get_one_customer' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer']], [], []],
    'get_all_customers' => [[], ['_controller' => 'App\\Controller\\CustomerController::getAll'], [], [['text', '/customer/']], [], []],
    'update_customer' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/update']], [], []],
    'delete_customer' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/delete']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/contact']], [], []],
    'app_main_number' => [[], ['_controller' => 'App\\Controller\\MainController::number'], [], [['text', '/main/number']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'add' => [[], ['_controller' => 'App\\Controller\\CustomerController::add'], [], [['text', '/customer/add']], [], []],
    'get' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer']], [], []],
    'getAll' => [[], ['_controller' => 'App\\Controller\\CustomerController::getAll'], [], [['text', '/customer/']], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/update']], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/delete']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], [], [], [['text', '/logout']], [], []],
    'indexadmin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'admindashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::adminDashboard'], [], [['text', '/admin/dashboard']], [], []],
];
