<?php
$api = app('Dingo\Api\Routing\Router');

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
$api->version('v1', function ($api) use($router){
  $api->get('/', function () use ($router) {
    return response()->json(['message' => 'SopyanAlansory API', 'status_code' => 200, 'version' => $router->app->version()], 200);
  });
});
