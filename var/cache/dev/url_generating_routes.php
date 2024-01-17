<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'hash', true], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], [], []],
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
    'templates' => [[], ['_controller' => 'App\\Controller\\BackofficeController::index'], [], [['text', '/']], [], [], []],
    'app_cataleg' => [[], ['_controller' => 'App\\Controller\\CatalegController::index'], [], [['text', '/cataleg']], [], [], []],
    'app_add_vehicle' => [['id'], ['_controller' => 'App\\Controller\\CatalegController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add']], [], [], []],
    'app_front_office' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], [], []],
    'app_back_office' => [[], ['_controller' => 'App\\Controller\\DefaultController::back'], [], [['text', '/backoffice']], [], [], []],
    'app_garage' => [[], ['_controller' => 'App\\Controller\\GarageController::index'], [], [['text', '/garage']], [], [], []],
    'remove_order' => [['id'], ['_controller' => 'App\\Controller\\GarageController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/remove']], [], [], []],
    'close_order' => [[], ['_controller' => 'App\\Controller\\GarageController::close'], [], [['text', '/close']], [], [], []],
    'cancel_order' => [[], ['_controller' => 'App\\Controller\\GarageController::cancel'], [], [['text', '/cancel']], [], [], []],
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
    'app_private_customer_index' => [[], ['_controller' => 'App\\Controller\\PrivateCustomerController::index'], [], [['text', '/private/customer/']], [], [], []],
    'app_private_customer_new' => [[], ['_controller' => 'App\\Controller\\PrivateCustomerController::new'], [], [['text', '/private/customer/new']], [], [], []],
    'app_private_customer_show' => [['id'], ['_controller' => 'App\\Controller\\PrivateCustomerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/private/customer']], [], [], []],
    'app_private_customer_edit' => [['id'], ['_controller' => 'App\\Controller\\PrivateCustomerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/private/customer']], [], [], []],
    'app_private_customer_delete' => [['id'], ['_controller' => 'App\\Controller\\PrivateCustomerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/private/customer']], [], [], []],
    'app_professional_index' => [[], ['_controller' => 'App\\Controller\\ProfessionalController::index'], [], [['text', '/professional/']], [], [], []],
    'app_professional_new' => [[], ['_controller' => 'App\\Controller\\ProfessionalController::new'], [], [['text', '/professional/new']], [], [], []],
    'app_professional_show' => [['id'], ['_controller' => 'App\\Controller\\ProfessionalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/professional']], [], [], []],
    'app_professional_edit' => [['id'], ['_controller' => 'App\\Controller\\ProfessionalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/professional']], [], [], []],
    'app_professional_delete' => [['id'], ['_controller' => 'App\\Controller\\ProfessionalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/professional']], [], [], []],
    'app_provider_index' => [[], ['_controller' => 'App\\Controller\\ProviderController::index'], [], [['text', '/provider/']], [], [], []],
    'app_provider_new' => [[], ['_controller' => 'App\\Controller\\ProviderController::new'], [], [['text', '/provider/new']], [], [], []],
    'app_provider_show' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'app_provider_edit' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'app_provider_delete' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'app_test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
    'App\Controller\BackofficeController::index' => [[], ['_controller' => 'App\\Controller\\BackofficeController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\CatalegController::index' => [[], ['_controller' => 'App\\Controller\\CatalegController::index'], [], [['text', '/cataleg']], [], [], []],
    'App\Controller\CatalegController::new' => [['id'], ['_controller' => 'App\\Controller\\CatalegController::new'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/add']], [], [], []],
    'App\Controller\DefaultController::index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\DefaultController::back' => [[], ['_controller' => 'App\\Controller\\DefaultController::back'], [], [['text', '/backoffice']], [], [], []],
    'App\Controller\GarageController::index' => [[], ['_controller' => 'App\\Controller\\GarageController::index'], [], [['text', '/garage']], [], [], []],
    'App\Controller\GarageController::remove' => [['id'], ['_controller' => 'App\\Controller\\GarageController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/remove']], [], [], []],
    'App\Controller\GarageController::close' => [[], ['_controller' => 'App\\Controller\\GarageController::close'], [], [['text', '/close']], [], [], []],
    'App\Controller\GarageController::cancel' => [[], ['_controller' => 'App\\Controller\\GarageController::cancel'], [], [['text', '/cancel']], [], [], []],
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
    'App\Controller\PrivateCustomerController::index' => [[], ['_controller' => 'App\\Controller\\PrivateCustomerController::index'], [], [['text', '/private/customer/']], [], [], []],
    'App\Controller\PrivateCustomerController::new' => [[], ['_controller' => 'App\\Controller\\PrivateCustomerController::new'], [], [['text', '/private/customer/new']], [], [], []],
    'App\Controller\PrivateCustomerController::show' => [['id'], ['_controller' => 'App\\Controller\\PrivateCustomerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/private/customer']], [], [], []],
    'App\Controller\PrivateCustomerController::edit' => [['id'], ['_controller' => 'App\\Controller\\PrivateCustomerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/private/customer']], [], [], []],
    'App\Controller\PrivateCustomerController::delete' => [['id'], ['_controller' => 'App\\Controller\\PrivateCustomerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/private/customer']], [], [], []],
    'App\Controller\ProfessionalController::index' => [[], ['_controller' => 'App\\Controller\\ProfessionalController::index'], [], [['text', '/professional/']], [], [], []],
    'App\Controller\ProfessionalController::new' => [[], ['_controller' => 'App\\Controller\\ProfessionalController::new'], [], [['text', '/professional/new']], [], [], []],
    'App\Controller\ProfessionalController::show' => [['id'], ['_controller' => 'App\\Controller\\ProfessionalController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/professional']], [], [], []],
    'App\Controller\ProfessionalController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProfessionalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/professional']], [], [], []],
    'App\Controller\ProfessionalController::delete' => [['id'], ['_controller' => 'App\\Controller\\ProfessionalController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/professional']], [], [], []],
    'App\Controller\ProviderController::index' => [[], ['_controller' => 'App\\Controller\\ProviderController::index'], [], [['text', '/provider/']], [], [], []],
    'App\Controller\ProviderController::new' => [[], ['_controller' => 'App\\Controller\\ProviderController::new'], [], [['text', '/provider/new']], [], [], []],
    'App\Controller\ProviderController::show' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'App\Controller\ProviderController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'App\Controller\ProviderController::delete' => [['id'], ['_controller' => 'App\\Controller\\ProviderController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provider']], [], [], []],
    'App\Controller\TestController::index' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
];
