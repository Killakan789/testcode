<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'app_blogapi_show' => [['id'], ['_controller' => 'App\\Controller\\BlogApiController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/posts']], [], []],
    'app_blogapi_edit' => [['id'], ['_controller' => 'App\\Controller\\BlogApiController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/posts']], [], []],
    'blog_list' => [[], ['_controller' => 'App\\Controller\\BlogController::list'], [], [['text', '/blog']], [], []],
    'add_customer' => [[], ['_controller' => 'App\\Controller\\CustomerController::add'], [], [['text', '/customer/add']], [], []],
    'get_one_customer' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer']], [], []],
    'get_all_customers' => [[], ['_controller' => 'App\\Controller\\CustomerController::getAll'], [], [['text', '/customer/']], [], []],
    'update_customer' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/update']], [], []],
    'delete_customer' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/delete']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\DefaultController::contact'], [], [['text', '/contact']], [], []],
    'app_main_number' => [[], ['_controller' => 'App\\Controller\\MainController::number'], [], [['text', '/main/number']], [], []],
    'add' => [[], ['_controller' => 'App\\Controller\\CustomerController::add'], [], [['text', '/customer/add']], [], []],
    'get' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::get'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer']], [], []],
    'getAll' => [[], ['_controller' => 'App\\Controller\\CustomerController::getAll'], [], [['text', '/customer/']], [], []],
    'update' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/update']], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\CustomerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/customer/delete']], [], []],
];
