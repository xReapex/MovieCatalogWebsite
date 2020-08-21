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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home_redirecthome', '_controller' => 'App\\Controller\\HomeController::redirectHome'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/(en|fr)(?'
                    .'|/(?'
                        .'|admin(*:189)'
                        .'|re(?'
                            .'|moveusers(*:211)'
                            .'|gister(*:225)'
                        .')'
                        .'|user(?'
                            .'|/(?'
                                .'|change/([^/]++)(*:260)'
                                .'|delete/([^/]++)(*:283)'
                                .'|edit/([^/]++)(*:304)'
                            .')'
                            .'|(*:313)'
                        .')'
                        .'|f(?'
                            .'|eedback(*:333)'
                            .'|ilm(*:344)'
                        .')'
                        .'|home(*:357)'
                        .'|login(*:370)'
                    .')'
                    .'|(*:379)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::showAdmin'], ['_locale'], null, null, false, false, null]],
        211 => [[['_route' => 'user.remove.all', '_controller' => 'App\\Controller\\AdminController::removeUsers'], ['_locale'], null, null, false, false, null]],
        225 => [[['_route' => 'register_user', '_controller' => 'App\\Controller\\HomeController::createUser'], ['_locale'], null, null, false, false, null]],
        260 => [[['_route' => 'changerole', '_controller' => 'App\\Controller\\AdminController::switchRole'], ['_locale', 'id'], null, null, false, true, null]],
        283 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\HomeController::deleteUser'], ['_locale', 'id'], null, null, false, true, null]],
        304 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\HomeController::editUser'], ['_locale', 'id'], null, null, false, true, null]],
        313 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\HomeController::index'], ['_locale'], null, null, false, false, null]],
        333 => [[['_route' => 'feedback', '_controller' => 'App\\Controller\\Feedback\\FeedbackController::index'], ['_locale'], null, null, false, false, null]],
        344 => [[['_route' => 'film.discover', '_controller' => 'App\\Controller\\FilmController::discoverFilm'], ['_locale'], null, null, false, false, null]],
        357 => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::showHome'], ['_locale'], null, null, false, false, null]],
        370 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], ['_locale'], null, null, false, false, null]],
        379 => [
            [['_route' => 'app_home_redirectlocalehome', '_controller' => 'App\\Controller\\HomeController::redirectLocaleHome'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
