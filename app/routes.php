<?php

$app->get('/', function() use ($app){
    $listeChocolats= $app['dao.chocolat']->findAll();
    return $app['twig']->render('index.html.twig', array('chocolats'=>$listeChocolats));
});