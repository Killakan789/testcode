<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
