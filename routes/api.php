<?php

use Illuminate\Http\Request;
use CloudCreativity\LaravelJsonApi\Facades\JsonApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

JsonApi::register('v1', ['namespace' => 'Api'], function ($api, $router) {
    $api->resource('wallets', [
        'has-one' => 'user',
        'has-many' => ['currency','money']
    ]);
});
