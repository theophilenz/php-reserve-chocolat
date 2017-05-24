<?php

$app->get('/', function() use ($app){
    $listeChocolats= $app['dao.chocolat']->findAll();

    ob_start();
    require '/views/index.view.php';
    $homeView=ob_get_clean();
    return $homeView;
});