<?php
use Illuminate\Http\Response;
/**
 * 路由
 * create by tc
 * 2017/12/29
 */
$api = app('Dingo\Api\Routing\Router');

//api version v1
$api->version('v1',['namespace' => 'App\Http\Controllers','prefix' =>'router1'],function($api) {
    
    $api->get('/',[
        'uses' =>'ExampleController@index'
    ]);
});
