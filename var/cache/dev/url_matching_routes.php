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
        '/back' => [[['_route' => 'templates', '_controller' => 'App\\Controller\\BackofficeController::index'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'templates_front', '_controller' => 'App\\Controller\\BackofficeController::front'], null, null, null, false, false, null]],
        '/catalogue' => [[['_route' => 'app_catalogue_index', '_controller' => 'App\\Controller\\CatalegController::index'], null, null, null, true, false, null]],
        '/customer' => [[['_route' => 'app_customer', '_controller' => 'App\\Controller\\CustomerController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_front_office', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/backoffice' => [[['_route' => 'app_back_office', '_controller' => 'App\\Controller\\DefaultController::back'], null, null, null, false, false, null]],
        '/employee' => [[['_route' => 'app_employee_index', '_controller' => 'App\\Controller\\EmployeeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employee/new' => [[['_route' => 'app_employee_new', '_controller' => 'App\\Controller\\EmployeeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/garage' => [[['_route' => 'app_garage_index', '_controller' => 'App\\Controller\\GarageController::index'], null, null, null, true, false, null]],
        '/garage/close' => [[['_route' => 'app_garage_close_order', '_controller' => 'App\\Controller\\GarageController::close'], null, null, null, false, false, null]],
        '/garage/cancel' => [[['_route' => 'app_garage_cancel_order', '_controller' => 'App\\Controller\\GarageController::cancel'], null, null, null, false, false, null]],
        '/invoices' => [[['_route' => 'app_invoice_index', '_controller' => 'App\\Controller\\InvoiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/invoices/new' => [[['_route' => 'app_invoice_new', '_controller' => 'App\\Controller\\InvoiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/orders' => [[['_route' => 'app_order_index', '_controller' => 'App\\Controller\\OrderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/orders/new' => [[['_route' => 'app_order_new', '_controller' => 'App\\Controller\\OrderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/private/customer' => [[['_route' => 'app_private_customer_index', '_controller' => 'App\\Controller\\PrivateCustomerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/private/customer/new' => [[['_route' => 'app_private_customer_new', '_controller' => 'App\\Controller\\PrivateCustomerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/professional' => [[['_route' => 'app_professional_index', '_controller' => 'App\\Controller\\ProfessionalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/professional/new' => [[['_route' => 'app_professional_new', '_controller' => 'App\\Controller\\ProfessionalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/providers' => [[['_route' => 'app_provider_index', '_controller' => 'App\\Controller\\ProviderController::index'], null, ['GET' => 0], null, true, false, null]],
        '/providers/new' => [[['_route' => 'app_provider_new', '_controller' => 'App\\Controller\\ProviderController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/vehicles' => [[['_route' => 'app_vehicle_index', '_controller' => 'App\\Controller\\VehicleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicles/new' => [[['_route' => 'app_vehicle_new', '_controller' => 'App\\Controller\\VehicleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/catalogue/add/([^/]++)(*:314)'
                .'|/employee/([^/]++)(?'
                    .'|(*:343)'
                    .'|/edit(*:356)'
                    .'|(*:364)'
                .')'
                .'|/garage/delete/([^/]++)(*:396)'
                .'|/invoices/([^/]++)(?'
                    .'|(*:425)'
                    .'|/(?'
                        .'|edit(*:441)'
                        .'|delete(*:455)'
                    .')'
                .')'
                .'|/orders/([^/]++)(?'
                    .'|(*:484)'
                    .'|/edit(*:497)'
                    .'|(*:505)'
                .')'
                .'|/pr(?'
                    .'|ivate/customer/([^/]++)(?'
                        .'|(*:546)'
                        .'|/edit(*:559)'
                        .'|(*:567)'
                    .')'
                    .'|o(?'
                        .'|fessional/([^/]++)(?'
                            .'|(*:601)'
                            .'|/edit(*:614)'
                            .'|(*:622)'
                        .')'
                        .'|viders/([^/]++)(?'
                            .'|(*:649)'
                            .'|/edit(*:662)'
                            .'|(*:670)'
                        .')'
                    .')'
                .')'
                .'|/vehicles/([^/]++)(?'
                    .'|(*:702)'
                    .'|/edit(*:715)'
                    .'|(*:723)'
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
        314 => [[['_route' => 'app_catalogue_add_vehicle', '_controller' => 'App\\Controller\\CatalegController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        343 => [[['_route' => 'app_employee_show', '_controller' => 'App\\Controller\\EmployeeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'app_employee_edit', '_controller' => 'App\\Controller\\EmployeeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'app_employee_delete', '_controller' => 'App\\Controller\\EmployeeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        396 => [[['_route' => 'app_garage_delete_vehicle', '_controller' => 'App\\Controller\\GarageController::remove'], ['id'], null, null, false, true, null]],
        425 => [[['_route' => 'app_invoice_show', '_controller' => 'App\\Controller\\InvoiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_invoice_edit', '_controller' => 'App\\Controller\\InvoiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        455 => [[['_route' => 'app_invoice_delete', '_controller' => 'App\\Controller\\InvoiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        484 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        497 => [[['_route' => 'app_order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [[['_route' => 'app_order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        546 => [[['_route' => 'app_private_customer_show', '_controller' => 'App\\Controller\\PrivateCustomerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        559 => [[['_route' => 'app_private_customer_edit', '_controller' => 'App\\Controller\\PrivateCustomerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        567 => [[['_route' => 'app_private_customer_delete', '_controller' => 'App\\Controller\\PrivateCustomerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        601 => [[['_route' => 'app_professional_show', '_controller' => 'App\\Controller\\ProfessionalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        614 => [[['_route' => 'app_professional_edit', '_controller' => 'App\\Controller\\ProfessionalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        622 => [[['_route' => 'app_professional_delete', '_controller' => 'App\\Controller\\ProfessionalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        649 => [[['_route' => 'app_provider_show', '_controller' => 'App\\Controller\\ProviderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        662 => [[['_route' => 'app_provider_edit', '_controller' => 'App\\Controller\\ProviderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        670 => [[['_route' => 'app_provider_delete', '_controller' => 'App\\Controller\\ProviderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        702 => [[['_route' => 'app_vehicle_show', '_controller' => 'App\\Controller\\VehicleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        715 => [[['_route' => 'app_vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        723 => [
            [['_route' => 'app_vehicle_delete', '_controller' => 'App\\Controller\\VehicleController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
