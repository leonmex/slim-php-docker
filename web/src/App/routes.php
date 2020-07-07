<?php

$app->get('/', 'App\Controller\DefaultController:getHelp');
$app->get('/status', 'App\Controller\DefaultController:getStatus');
$app->post('/login', 'App\Controller\User\LoginUser');

$app->group('/api/v1', function () use ($app) {
    $app->group('/product', function () use ($app) {
        $app->get('', 'App\Controller\Product\GetAllProducts');
        $app->get('/[{id}]', 'App\Controller\Product\GetOneProduct');
        $app->get('/{id}/unit/{unitid}', 'App\Controller\Product\GetOneWithUnit');
    });
});
