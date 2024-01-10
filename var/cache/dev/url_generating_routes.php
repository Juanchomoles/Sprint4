<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_front_office' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], [], []],
    'app_back_office' => [[], ['_controller' => 'App\\Controller\\DefaultController::back'], [], [['text', '/backoffice']], [], [], []],
    'app_invoice_index' => [[], ['_controller' => 'App\\Controller\\InvoiceController::index'], [], [['text', '/invoice/']], [], [], []],
    'app_invoice_new' => [[], ['_controller' => 'App\\Controller\\InvoiceController::new'], [], [['text', '/invoice/new']], [], [], []],
    'app_invoice_show' => [['id'], ['_controller' => 'App\\Controller\\InvoiceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/invoice']], [], [], []],
    'app_invoice_edit' => [['id'], ['_controller' => 'App\\Controller\\InvoiceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/invoice']], [], [], []],
    'app_invoice_delete' => [['id'], ['_controller' => 'App\\Controller\\InvoiceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/invoice']], [], [], []],
    'app_order_index' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/orders/']], [], [], []],
    'app_order_new' => [[], ['_controller' => 'App\\Controller\\OrderController::new'], [], [['text', '/orders/new']], [], [], []],
    'app_order_show' => [['id'], ['_controller' => 'App\\Controller\\OrderController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orders']], [], [], []],
    'app_order_edit' => [['id'], ['_controller' => 'App\\Controller\\OrderController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/orders']], [], [], []],
    'app_order_delete' => [['id'], ['_controller' => 'App\\Controller\\OrderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orders']], [], [], []],
    'app_provider_index' => [[], ['_controller' => 'App\\Controller\\ProviderController::index'], [], [['text', '/provider/']], [], [], []],
    'app_provider_new' => [[], ['_controller' => 'App\\Controller\\ProviderController::new'], [], [['text', '/provider/new']], [], [], []],
    'app_provider_show' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'app_provider_edit' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'app_provider_delete' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'app_test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
    'App\Controller\DefaultController::index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\DefaultController::back' => [[], ['_controller' => 'App\\Controller\\DefaultController::back'], [], [['text', '/backoffice']], [], [], []],
    'App\Controller\InvoiceController::index' => [[], ['_controller' => 'App\\Controller\\InvoiceController::index'], [], [['text', '/invoice/']], [], [], []],
    'App\Controller\InvoiceController::new' => [[], ['_controller' => 'App\\Controller\\InvoiceController::new'], [], [['text', '/invoice/new']], [], [], []],
    'App\Controller\InvoiceController::show' => [['id'], ['_controller' => 'App\\Controller\\InvoiceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/invoice']], [], [], []],
    'App\Controller\InvoiceController::edit' => [['id'], ['_controller' => 'App\\Controller\\InvoiceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/invoice']], [], [], []],
    'App\Controller\InvoiceController::delete' => [['id'], ['_controller' => 'App\\Controller\\InvoiceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/invoice']], [], [], []],
    'App\Controller\OrderController::index' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/orders/']], [], [], []],
    'App\Controller\OrderController::new' => [[], ['_controller' => 'App\\Controller\\OrderController::new'], [], [['text', '/orders/new']], [], [], []],
    'App\Controller\OrderController::show' => [['id'], ['_controller' => 'App\\Controller\\OrderController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orders']], [], [], []],
    'App\Controller\OrderController::edit' => [['id'], ['_controller' => 'App\\Controller\\OrderController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/orders']], [], [], []],
    'App\Controller\OrderController::delete' => [['id'], ['_controller' => 'App\\Controller\\OrderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/orders']], [], [], []],
    'App\Controller\ProviderController::index' => [[], ['_controller' => 'App\\Controller\\ProviderController::index'], [], [['text', '/provider/']], [], [], []],
    'App\Controller\ProviderController::new' => [[], ['_controller' => 'App\\Controller\\ProviderController::new'], [], [['text', '/provider/new']], [], [], []],
    'App\Controller\ProviderController::show' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'App\Controller\ProviderController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'App\Controller\ProviderController::delete' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'App\Controller\TestController::index' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
];