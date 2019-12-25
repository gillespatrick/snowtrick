<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'tricks' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/tricks/']], [], []],
    'add_trick' => [[], ['_controller' => 'App\\Controller\\TickController::add'], [], [['text', '/trick/addtrick']], [], []],
    'trick_edit' => [['slug'], ['_controller' => 'App\\Controller\\TickController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/trick']], [], []],
    'showdetail' => [['slug'], ['_controller' => 'App\\Controller\\TickController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/trick']], [], []],
    'user' => [['username'], ['_controller' => 'App\\Controller\\UserAccountController::index'], [], [['variable', '/', '[^/]++', 'username', true], ['text', '/account']], [], []],
    'user_account' => [[], ['_controller' => 'App\\Controller\\UserAccountController::login'], [], [['text', '/login']], [], []],
    'user_account_register' => [[], ['_controller' => 'App\\Controller\\UserAccountController::register'], [], [['text', '/register']], [], []],
    ' user_profile ' => [[], ['_controller' => 'App\\Controller\\UserAccountController::profile'], [], [['text', '/profile']], [], []],
    ' user_account_updatepassword' => [[], ['_controller' => 'App\\Controller\\UserAccountController::updatePassword'], [], [['text', '/user/updatepassword']], [], []],
    'email_validation' => [['username', 'token'], ['_controller' => 'App\\Controller\\UserAccountController::emailValidation'], [], [['variable', '/', '[^/]++', 'token', true], ['variable', '/', '[^/]++', 'username', true], ['text', '/validation']], [], []],
    'show_user' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/dashboard']], [], []],
    'update_profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/user/update/']], [], []],
    'login_user' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/user/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/user/logout']], [], []],
    'update_password' => [[], ['_controller' => 'App\\Controller\\UserController::updatePassword'], [], [['text', '/user/update_password']], [], []],
];
