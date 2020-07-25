<?php

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

