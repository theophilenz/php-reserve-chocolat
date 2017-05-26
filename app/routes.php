<?php

//Page d'accueil
$app->get('/', function () use ($app) {
    $listeChocolats= $app['dao.chocolat']->findAll();
    return $app['twig']->render('index.html.twig', array('chocolats'=>$listeChocolats));
})->bind('home');

//Détails de le contenu d'un chocolat avec les commentaires
$app->get('/chocolat/{id}', function ($id) use ($app){
    $chocolat=$app['dao.chocolat']->find($id);
    $comments= $app['dao.comment']->findAllByChocolat($id);
    return $app['twig']->render('chocolat.html.twig', array('chocolat'=>$chocolat, "comments"=>$comments));
})->bind('chocolat');