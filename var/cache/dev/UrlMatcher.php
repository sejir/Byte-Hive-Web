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
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\APIController::index'], null, null, null, false, false, null]],
        '/CalendrierAct' => [[['_route' => 'main', '_controller' => 'App\\Controller\\APIController::evenement'], null, null, null, false, false, null]],
        '/act' => [[['_route' => 'act_index', '_controller' => 'App\\Controller\\ActController::index'], null, ['GET' => 0], null, true, false, null]],
        '/actClient' => [[['_route' => 'act_client', '_controller' => 'App\\Controller\\ActController::ActClient'], null, ['GET' => 0], null, true, false, null]],
        '/act/new' => [[['_route' => 'act_new', '_controller' => 'App\\Controller\\ActController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendarShow' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\ActController::indexCalendar'], null, ['GET' => 0], null, false, false, null]],
        '/triDateDebutAsc' => [[['_route' => 'triDateDebutAsc', '_controller' => 'App\\Controller\\ActController::triDateDebutAsc'], null, null, null, false, false, null]],
        '/triDateDebutDesc' => [[['_route' => 'triDateDebutDesc', '_controller' => 'App\\Controller\\ActController::triDateDebutDesc'], null, null, null, false, false, null]],
        '/triClientDateDebutAsc' => [[['_route' => 'triClientDateDebutAsc', '_controller' => 'App\\Controller\\ActController::triClientDateDebutAsc'], null, null, null, false, false, null]],
        '/triClientDateDebutDesc' => [[['_route' => 'triClientDateDebutDesc', '_controller' => 'App\\Controller\\ActController::triClientDateDebutDesc'], null, null, null, false, false, null]],
        '/AfficheActPDF' => [[['_route' => 'AfficheActPDF', '_controller' => 'App\\Controller\\ActController::AfficheActPDF'], null, null, null, false, false, null]],
        '/localisation' => [[['_route' => 'localisation_index', '_controller' => 'App\\Controller\\LocalisationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/localisation/new' => [[['_route' => 'localisation_new', '_controller' => 'App\\Controller\\LocalisationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|pi/([^/]++)/edit(*:190)'
                    .'|ct/([^/]++)(?'
                        .'|(*:212)'
                        .'|/edit(*:225)'
                        .'|(*:233)'
                    .')'
                .')'
                .'|/calendar([^/]++)(?'
                    .'|(*:263)'
                    .'|/edit(*:276)'
                .')'
                .'|/localisation/([^/]++)(?'
                    .'|(*:310)'
                    .'|/edit(*:323)'
                    .'|(*:331)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\APIController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        212 => [[['_route' => 'act_show', '_controller' => 'App\\Controller\\ActController::show'], ['idAct'], ['GET' => 0], null, false, true, null]],
        225 => [[['_route' => 'act_edit', '_controller' => 'App\\Controller\\ActController::edit'], ['idAct'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        233 => [[['_route' => 'act_delete', '_controller' => 'App\\Controller\\ActController::delete'], ['idAct'], ['POST' => 0], null, false, true, null]],
        263 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\ActController::showCalendar'], ['id'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\ActController::editCalendar'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        310 => [[['_route' => 'localisation_show', '_controller' => 'App\\Controller\\LocalisationController::show'], ['idEmplacement'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'localisation_edit', '_controller' => 'App\\Controller\\LocalisationController::edit'], ['idEmplacement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [
            [['_route' => 'localisation_delete', '_controller' => 'App\\Controller\\LocalisationController::delete'], ['idEmplacement'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
