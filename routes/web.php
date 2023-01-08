<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/registro_cliente', 'EpaycoController@registro_cliente');
$router->post('/recarga_billetera', 'EpaycoController@recarga_billetera');
$router->post('/consultar_saldo', 'EpaycoController@consultar_saldo');
$router->post('/pagar', 'EpaycoController@pagar');
$router->post('/confirmar_pago', 'EpaycoController@confirmar_pago');
