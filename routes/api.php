<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['middleware' => 'api.auth'], function ($api) {
        $api->get('coffees', 'App\CoffeeotoApi\Controllers\CoffeeController@index');
    });
});
