<?php

use CodeIgniter\Router\RouteCollection;

service('auth')->routes($routes);

$routes->get('/', 'ConteudoController::index');
$routes->get('home', 'ConteudoController::index');
$routes->get('contato', 'ConteudoController::contato');

$routes->group('', ['filter' => 'session'], static function ($routes) {
    $routes->get('conteudos', 'Admin\Painel::listar');
    $routes->get('conteudos/editar/(:num)', 'Admin\Painel::editar/$1');
    $routes->post('conteudos/atualizar/(:num)', 'Admin\Painel::atualizar/$1');
});

$routes->get('admin', 'Admin\Painel::index', [
    'filter' => ['session', 'group:admin'],
]);

$routes->post('admin/sair', 'Admin\Painel::logout', [
    'filter' => 'session',
]);