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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/socios' => [[['_route' => 'socios', '_controller' => 'App\\Controller\\AdminController::socios'], null, null, null, false, false, null]],
        '/admin/calendario' => [[['_route' => 'calendario', '_controller' => 'App\\Controller\\AdminController::calendario'], null, null, null, false, false, null]],
        '/admin/gestionMesas' => [[['_route' => 'gestionMesas', '_controller' => 'App\\Controller\\AdminController::gestionMesas'], null, null, null, false, false, null]],
        '/admin/mantenimientoJuegos' => [[['_route' => 'mantenimientoJuegos', '_controller' => 'App\\Controller\\AdminController::mantenimientoJuegos'], null, null, null, false, false, null]],
        '/admin/api/distribucion' => [
            [['_route' => 'api_distribucion', '_controller' => 'App\\Controller\\Api\\ApiDistribucionController::mesasFecha'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_distribucion_new', '_controller' => 'App\\Controller\\Api\\ApiDistribucionController::new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/evento' => [
            [['_route' => 'api_evento_index', '_controller' => 'App\\Controller\\Api\\ApiEventosController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_evento_new', '_controller' => 'App\\Controller\\Api\\ApiEventosController::new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/invitacion' => [
            [['_route' => 'api_invitacion_index', '_controller' => 'App\\Controller\\Api\\ApiInvitacionUser::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_invitacion_new', '_controller' => 'App\\Controller\\Api\\ApiInvitacionUser::new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/juego' => [
            [['_route' => 'api_juego_index', '_controller' => 'App\\Controller\\Api\\ApiJuegoController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_juego_new', '_controller' => 'App\\Controller\\Api\\ApiJuegoController::new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/mesa' => [
            [['_route' => 'api_mesa_index', '_controller' => 'App\\Controller\\Api\\ApiMesaController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_mesa_new', '_controller' => 'App\\Controller\\Api\\ApiMesaController::new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/reserva' => [
            [['_route' => 'api_reserva_index', '_controller' => 'App\\Controller\\Api\\ApiReservaController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'api_reserva_new', '_controller' => 'App\\Controller\\Api\\ApiReservaController::new'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/user' => [[['_route' => 'api_user_index', '_controller' => 'App\\Controller\\Api\\ApiUser::index'], null, ['GET' => 0], null, false, false, null]],
        '/juego' => [[['_route' => 'app_juego_index', '_controller' => 'App\\Controller\\JuegoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/juego/new' => [[['_route' => 'app_juego_new', '_controller' => 'App\\Controller\\JuegoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\MyController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'email', '_controller' => 'App\\Controller\\MailerController::sendEmaiil'], null, null, null, false, false, null]],
        '/mesas' => [[['_route' => 'mesas', '_controller' => 'App\\Controller\\MyController::gestionMesas'], null, null, null, false, false, null]],
        '/juegos' => [[['_route' => 'juegos', '_controller' => 'App\\Controller\\MyController::listadoJuegos'], null, ['GET' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MyController::index'], null, null, null, false, false, null]],
        '/perfil' => [[['_route' => 'perfil', '_controller' => 'App\\Controller\\MyController::perfil'], null, null, null, false, false, null]],
        '/eventos' => [[['_route' => 'eventos', '_controller' => 'App\\Controller\\MyController::eventos'], null, null, null, false, false, null]],
        '/registro' => [[['_route' => 'registro', '_controller' => 'App\\Controller\\MyController::resgistro'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'landingPage', '_controller' => 'App\\Controller\\MyController::landingPage'], null, null, null, false, false, null]],
        '/landingPage2' => [[['_route' => 'landingPage2', '_controller' => 'App\\Controller\\MyController::landingPage2'], null, null, null, false, false, null]],
        '/segundaPagina' => [[['_route' => 'new', '_controller' => 'App\\Controller\\MyController::nuevaRuta'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/super-admin' => [[['_route' => 'app_super_admin', '_controller' => 'App\\Controller\\SuperAdminController::index'], null, null, null, false, false, null]],
        '/admin/invitacionEventos' => [[['_route' => 'invitacionEventos', '_controller' => 'App\\Controller\\form\\EventosController::newEvents'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/gamesEvents' => [[['_route' => 'gamesEvents', '_controller' => 'App\\Controller\\form\\EventosController::newGamesEvents'], null, null, null, false, false, null]],
        '/admin/invitacionUsuario' => [[['_route' => 'invitacionUsuario', '_controller' => 'App\\Controller\\form\\EventosController::invitacionUsuario'], null, null, null, false, false, null]],
        '/reservas' => [[['_route' => 'reservas', '_controller' => 'App\\Controller\\form\\ReservasController::new'], null, null, null, false, false, null]],
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
                    .'|dmin(?'
                        .'|/api/distribucion/([^/]++)(?'
                            .'|(*:210)'
                        .')'
                        .'|invitacionEventos/([^/]++)(?'
                            .'|/edit(*:253)'
                            .'|(*:261)'
                        .')'
                    .')'
                    .'|pi/(?'
                        .'|evento/([^/]++)(?'
                            .'|(*:295)'
                        .')'
                        .'|juego/([^/]++)(?'
                            .'|(*:321)'
                        .')'
                        .'|mesa/([^/]++)(?'
                            .'|(*:346)'
                        .')'
                        .'|reserva/([^/]++)(?'
                            .'|(*:374)'
                        .')'
                    .')'
                .')'
                .'|/juego/(?'
                    .'|([^/]++)(?'
                        .'|(*:406)'
                        .'|/edit(*:419)'
                        .'|(*:427)'
                    .')'
                    .'|paginacion(*:446)'
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
        210 => [
            [['_route' => 'api_distribucion_edit', '_controller' => 'App\\Controller\\Api\\ApiDistribucionController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_distribucion_delete', '_controller' => 'App\\Controller\\Api\\ApiDistribucionController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        253 => [[['_route' => 'app_gamesEvents_edit', '_controller' => 'App\\Controller\\form\\EventosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        261 => [[['_route' => 'app_gamesEvent_delete', '_controller' => 'App\\Controller\\form\\EventosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        295 => [
            [['_route' => 'api_evento_show', '_controller' => 'App\\Controller\\Api\\ApiEventosController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_evento_edit', '_controller' => 'App\\Controller\\Api\\ApiEventosController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_evento_delete', '_controller' => 'App\\Controller\\Api\\ApiEventosController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        321 => [
            [['_route' => 'api_juego_show', '_controller' => 'App\\Controller\\Api\\ApiJuegoController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_juego_edit', '_controller' => 'App\\Controller\\Api\\ApiJuegoController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_juego_delete', '_controller' => 'App\\Controller\\Api\\ApiJuegoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        346 => [
            [['_route' => 'api_mesa_show', '_controller' => 'App\\Controller\\Api\\ApiMesaController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_mesa_edit', '_controller' => 'App\\Controller\\Api\\ApiMesaController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_mesa_delete', '_controller' => 'App\\Controller\\Api\\ApiMesaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        374 => [
            [['_route' => 'api_reserva', '_controller' => 'App\\Controller\\Api\\ApiReservaController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_reserva_edit', '_controller' => 'App\\Controller\\Api\\ApiReservaController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_reserva_delete', '_controller' => 'App\\Controller\\Api\\ApiReservaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        406 => [[['_route' => 'app_juego_show', '_controller' => 'App\\Controller\\JuegoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        419 => [[['_route' => 'app_juego_edit', '_controller' => 'App\\Controller\\JuegoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        427 => [[['_route' => 'app_juego_delete', '_controller' => 'App\\Controller\\JuegoController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        446 => [
            [['_route' => 'paginacion', '_controller' => 'App\\Controller\\JuegoController::listAction'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
