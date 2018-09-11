<?php

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

$router->get('/', ['as' => 'dashboard', 'uses' => DashboardController::class]);
$router->get('/shipments/create', ['as' => 'shipments.create', 'uses' => 'ShipmentsController@create']);
$router->get('/shipments/{id}', ['as' => 'shipments.view', 'uses' => 'ShipmentsController@view']);
$router->post('/shipments', ['as' => 'shipments.store', 'uses' => 'ShipmentsController@store']);
$router->get('/shipments', ['as' => 'shipments.index', 'uses' => 'ShipmentsController@index']);

$router->get('/printers', ['as' => 'printers.index', 'uses' => 'PrintersController@index']);