<?php

//Rest API: Rest-> Representational State Transfer & API->Application Programming Interface
//client-server
//stateless
//cacheable
//uniform interface


$router->get('/', function () use ($router) {
    return 'i am get';
});

$router->post('/post', function () use ($router) {
    return 'i am post';
});

$router->put('/put', function () use ($router) {
    return 'i am put';
});

$router->delete('/delete', function () use ($router) {
    return 'i am delete';
});
// Methods for Rest API

$router->post('/call', function(){
    return 'call-back function demo';
});

//two type parameter can pass by route 1. required parameter, Optional parameter
//required parameter
$router->get('/name/{value}', function($value){
    return $value;
});

$router->post('/{name}/{age}[/{city}]', function($name, $age, $city=null){
    return $name.$age.$city;
});

$router->get('{name}/test', 'TestController@test');

// API respons: respons area-> header & body; respons type-> string, json, redirect, download, xml


