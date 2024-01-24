<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:61)'
                    .'|([A-z0-9_-]*)/(.+)(*:86)'
                .')'
                .'|/catalogue/add/([^/]++)(*:117)'
                .'|/employee/([^/]++)(?'
                    .'|(*:146)'
                    .'|/edit(*:159)'
                    .'|(*:167)'
                .')'
                .'|/garage/delete/([^/]++)(*:199)'
                .'|/invoices/([^/]++)(?'
                    .'|(*:228)'
                    .'|/(?'
                        .'|edit(*:244)'
                        .'|delete(*:258)'
                    .')'
                .')'
                .'|/orders/([^/]++)(?'
                    .'|(*:287)'
                    .'|/edit(*:300)'
                    .'|(*:308)'
                .')'
                .'|/pr(?'
                    .'|ivate/customer/([^/]++)(?'
                        .'|(*:349)'
                        .'|/edit(*:362)'
                        .'|(*:370)'
                    .')'
                    .'|o(?'
                        .'|fessional/([^/]++)(?'
                            .'|(*:404)'
                            .'|/edit(*:417)'
                            .'|(*:425)'
                        .')'
                        .'|viders/([^/]++)(?'
                            .'|(*:452)'
                            .'|/edit(*:465)'
                            .'|(*:473)'
                        .')'
                    .')'
                .')'
                .'|/vehicles/([^/]++)(?'
                    .'|(*:505)'
                    .'|/edit(*:518)'
                    .'|(*:526)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        61 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        117 => [[['_route' => 'app_catalogue_add_vehicle', '_controller' => 'App\\Controller\\CatalegController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        146 => [[['_route' => 'app_employee_show', '_controller' => 'App\\Controller\\EmployeeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        159 => [[['_route' => 'app_employee_edit', '_controller' => 'App\\Controller\\EmployeeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        167 => [[['_route' => 'app_employee_delete', '_controller' => 'App\\Controller\\EmployeeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        199 => [[['_route' => 'app_garage_delete_vehicle', '_controller' => 'App\\Controller\\GarageController::remove'], ['id'], null, null, false, true, null]],
        228 => [[['_route' => 'app_invoice_show', '_controller' => 'App\\Controller\\InvoiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        244 => [[['_route' => 'app_invoice_edit', '_controller' => 'App\\Controller\\InvoiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_invoice_delete', '_controller' => 'App\\Controller\\InvoiceController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        287 => [[['_route' => 'app_order_show', '_controller' => 'App\\Controller\\OrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        300 => [[['_route' => 'app_order_edit', '_controller' => 'App\\Controller\\OrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        308 => [[['_route' => 'app_order_delete', '_controller' => 'App\\Controller\\OrderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_private_customer_show', '_controller' => 'App\\Controller\\PrivateCustomerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'app_private_customer_edit', '_controller' => 'App\\Controller\\PrivateCustomerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'app_private_customer_delete', '_controller' => 'App\\Controller\\PrivateCustomerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_professional_show', '_controller' => 'App\\Controller\\ProfessionalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_professional_edit', '_controller' => 'App\\Controller\\ProfessionalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'app_professional_delete', '_controller' => 'App\\Controller\\ProfessionalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        452 => [[['_route' => 'app_provider_show', '_controller' => 'App\\Controller\\ProviderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        465 => [[['_route' => 'app_provider_edit', '_controller' => 'App\\Controller\\ProviderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        473 => [[['_route' => 'app_provider_delete', '_controller' => 'App\\Controller\\ProviderController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        505 => [[['_route' => 'app_vehicle_show', '_controller' => 'App\\Controller\\VehicleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        518 => [[['_route' => 'app_vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        526 => [
            [['_route' => 'app_vehicle_delete', '_controller' => 'App\\Controller\\VehicleController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
