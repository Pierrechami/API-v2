<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:153)'
                                .'|m(?'
                                    .'|ments(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:199)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:225)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:263)'
                                        .')'
                                    .')'
                                    .'|panies(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:308)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:334)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:372)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|ategories(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:422)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:448)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:486)'
                                .')'
                            .')'
                            .'|ities(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:530)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:556)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:594)'
                                .')'
                            .')'
                        .')'
                        .'|fields(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:640)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:666)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:704)'
                            .')'
                        .')'
                        .'|locations(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:752)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:778)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:816)'
                            .')'
                        .')'
                        .'|products(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:863)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:889)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:927)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:971)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:997)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1035)'
                            .')'
                        .')'
                        .'|winegrowers(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1086)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1113)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1152)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:1193)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        153 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        199 => [[['_route' => '_api_/comments/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comments', '_api_operation_name' => '_api_/comments/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        225 => [
            [['_route' => '_api_/comments.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comments', '_api_operation_name' => '_api_/comments.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/comments.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comments', '_api_operation_name' => '_api_/comments.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        263 => [
            [['_route' => '_api_/comments/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comments', '_api_operation_name' => '_api_/comments/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/comments/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comments', '_api_operation_name' => '_api_/comments/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/comments/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Comments', '_api_operation_name' => '_api_/comments/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        308 => [[['_route' => '_api_/companies/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        334 => [
            [['_route' => '_api_/companies.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/companies.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        372 => [
            [['_route' => '_api_/companies/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/companies/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/companies/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Company', '_api_operation_name' => '_api_/companies/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        422 => [[['_route' => '_api_/categories/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        448 => [
            [['_route' => '_api_/categories.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categories.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        486 => [
            [['_route' => '_api_/categories/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categories/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_operation_name' => '_api_/categories/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        530 => [[['_route' => '_api_/cities/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_operation_name' => '_api_/cities/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        556 => [
            [['_route' => '_api_/cities.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_operation_name' => '_api_/cities.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/cities.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_operation_name' => '_api_/cities.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        594 => [
            [['_route' => '_api_/cities/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_operation_name' => '_api_/cities/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/cities/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_operation_name' => '_api_/cities/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/cities/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\City', '_api_operation_name' => '_api_/cities/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        640 => [[['_route' => '_api_/fields/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fields', '_api_operation_name' => '_api_/fields/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        666 => [
            [['_route' => '_api_/fields.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fields', '_api_operation_name' => '_api_/fields.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/fields.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fields', '_api_operation_name' => '_api_/fields.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        704 => [
            [['_route' => '_api_/fields/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fields', '_api_operation_name' => '_api_/fields/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/fields/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fields', '_api_operation_name' => '_api_/fields/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/fields/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fields', '_api_operation_name' => '_api_/fields/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        752 => [[['_route' => '_api_/locations/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locations', '_api_operation_name' => '_api_/locations/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        778 => [
            [['_route' => '_api_/locations.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locations', '_api_operation_name' => '_api_/locations.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/locations.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locations', '_api_operation_name' => '_api_/locations.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        816 => [
            [['_route' => '_api_/locations/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locations', '_api_operation_name' => '_api_/locations/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/locations/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locations', '_api_operation_name' => '_api_/locations/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/locations/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Locations', '_api_operation_name' => '_api_/locations/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        863 => [[['_route' => '_api_/products/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        889 => [
            [['_route' => '_api_/products.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/products.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        927 => [
            [['_route' => '_api_/products/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/products/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/products/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Products', '_api_operation_name' => '_api_/products/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        971 => [[['_route' => '_api_/users/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        997 => [
            [['_route' => '_api_/users.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1035 => [
            [['_route' => '_api_/users/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1086 => [[['_route' => '_api_/winegrowers/{id}.{_format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Winegrower', '_api_operation_name' => '_api_/winegrowers/{id}.{_format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1113 => [
            [['_route' => '_api_/winegrowers.{_format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Winegrower', '_api_operation_name' => '_api_/winegrowers.{_format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/winegrowers.{_format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Winegrower', '_api_operation_name' => '_api_/winegrowers.{_format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1152 => [
            [['_route' => '_api_/winegrowers/{id}.{_format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Winegrower', '_api_operation_name' => '_api_/winegrowers/{id}.{_format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/winegrowers/{id}.{_format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Winegrower', '_api_operation_name' => '_api_/winegrowers/{id}.{_format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/winegrowers/{id}.{_format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Winegrower', '_api_operation_name' => '_api_/winegrowers/{id}.{_format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1193 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
