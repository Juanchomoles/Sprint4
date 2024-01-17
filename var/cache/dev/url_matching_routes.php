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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'templates', '_controller' => 'App\\Controller\\BackofficeController::index'], null, null, null, false, false, null],
            [['_route' => 'app_front_office', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null],
        ],
        '/cataleg' => [[['_route' => 'app_cataleg', '_controller' => 'App\\Controller\\CatalegController::index'], null, null, null, false, false, null]],
        '/backoffice' => [[['_route' => 'app_back_office', '_controller' => 'App\\Controller\\DefaultController::back'], null, null, null, false, false, null]],
        '/garage' => [[['_route' => 'app_garage', '_controller' => 'App\\Controller\\GarageController::index'], null, null, null, false, false, null]],
        '/close' => [[['_route' => 'close_order', '_controller' => 'App\\Controller\\GarageController::close'], null, null, null, false, false, null]],
        '/cancel' => [[['_route' => 'cancel_order', '_controller' => 'App\\Controller\\GarageController::cancel'], null, null, null, false, false, null]],
        '/invoice' => [[['_route' => 'app_invoice_index', '_controller' => 'App\\Controller\\InvoiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/invoice/new' => [[['_route' => 'app_invoice_new', '_controller' => 'App\\Controller\\InvoiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/orders' => [[['_route' => 'app_order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/orders/new' => [[['_route' => 'app_order_new', '_controller' => 'App\\Controller\\OrderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/private/customer' => [[['_route' => 'app_private_customer_index', '_controller' => 'App\\Controller\\PrivateCustomerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/private/customer/new' => [[['_route' => 'app_private_customer_new', '_controller' => 'App\\Controller\\PrivateCustomerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/professional' => [[['_route' => 'app_professional_index', '_controller' => 'App\\Controller\\ProfessionalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/professional/new' => [[['_route' => 'app_professional_new', '_controller' => 'App\\Controller\\ProfessionalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/provider' => [[['_route' => 'app_provider_index', '_controller' => 'App\\Controller\\ProviderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/provider/new' => [[['_route' => 'app_provider_new', '_controller' => 'App\\Controller\\ProviderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:256)'
                    .'|([A-z0-9_-]*)/(.+)(*:282)'
                .')'
                .'|/add/([^/]++)(*:304)'
                .'|/remove/([^/]++)(*:328)'
                .'|/invoice/([^/]++)(?'
                    .'|(*:356)'
                    .'|/edit(*:369)'
                    .'|(*:377)'
                .')'
                .'|/orders/([^/]++)(?'
                    .'|(*:405)'
                    .'|/edit(*:418)'
                    .'|(*:426)'
                .')'
                .'|/pr(?'
                    .'|ivate/customer/([^/]++)(?'
                        .'|(*:467)'
                        .'|/edit(*:480)'
                        .'|(*:488)'
                    .')'
                    .'|o(?'
                        .'|fessional/([^/]++)(?'
                            .'|(*:522)'
                            .'|/edit(*:535)'
                            .'|(*:543)'
                        .')'
                        .'|vider/([^/]++)(?'
                            .'|(*:569)'
                            .'|/edit(*:582)'
                            .'|(*:590)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        256 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'app_add_vehicle', '_controller' => 'App\\Controller\\CatalegController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        328 => [[['_route' => 'remove_order', '_controller' => 'App\\Controller\\GarageController::remove'], ['id'], null, null, false, true, null]],
        356 => [[['_route' => 'app_invoice_show', '_controller' => 'App\\Controller\\InvoiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'app_invoice_edit', '_controller' => 'App\\Controller\\InvoiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'app_invoice_delete', '_controller' => 'App\\Controller\\InvoiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        405 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        418 => [[['_route' => 'app_order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        426 => [[['_route' => 'app_order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        467 => [[['_route' => 'app_private_customer_show', '_controller' => 'App\\Controller\\PrivateCustomerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'app_private_customer_edit', '_controller' => 'App\\Controller\\PrivateCustomerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        488 => [[['_route' => 'app_private_customer_delete', '_controller' => 'App\\Controller\\PrivateCustomerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_professional_show', '_controller' => 'App\\Controller\\ProfessionalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        535 => [[['_route' => 'app_professional_edit', '_controller' => 'App\\Controller\\ProfessionalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        543 => [[['_route' => 'app_professional_delete', '_controller' => 'App\\Controller\\ProfessionalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        569 => [[['_route' => 'app_provider_show', '_controller' => 'App\\Controller\\ProviderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        582 => [[['_route' => 'app_provider_edit', '_controller' => 'App\\Controller\\ProviderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        590 => [
            [['_route' => 'app_provider_delete', '_controller' => 'App\\Controller\\ProviderController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
