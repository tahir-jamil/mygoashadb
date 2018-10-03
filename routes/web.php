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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('party',  ['uses' => 'PartyController@showAllPartys']);

  $router->get('party/{id}', ['uses' => 'PartyController@showOneParty']);

  $router->get('party/{username}/{password}', ['uses' => 'PartyController@login']);

  $router->post('party', ['uses' => 'PartyController@create']);

  $router->delete('party/{id}', ['uses' => 'PartyController@delete']);

  $router->put('party/{id}', ['uses' => 'PartyController@update']);

  $router->get('statistics/', ['uses' => 'PartyController@statistics']);
});


$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('count',  ['uses' => 'CountsController@showAllCounts']);

  $router->get('counts/{id}', ['uses' => 'CountsController@showOneCount']);

  $router->post('counts', ['uses' => 'CountsController@create']);

  $router->delete('counts/{id}', ['uses' => 'CountsController@delete']);

  $router->put('counts/{id}', ['uses' => 'CountsController@update']);
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('applyGoashas',  ['uses' => 'GoashasController@showAllGoashas']);

  $router->get('applyGoashas/{id}', ['uses' => 'GoashasController@showOneGoasha']);

  $router->post('applyGoashas', ['uses' => 'GoashasController@create']);

  $router->delete('applyGoashas/{id}', ['uses' => 'GoashasController@delete']);

  $router->put('applyGoashas/{id}', ['uses' => 'GoashasController@update']);
});

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('statistics/{region}', ['uses' => 'StatisticsController@statistics']);
  $router->get('totalcounts/', ['uses' => 'StatisticsController@totalcounts']);
  $router->get('userCounts/{id}', ['uses' => 'StatisticsController@userCounts']);
});