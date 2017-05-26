<?php
//Ce document sert à définir les composantes de l'application et son exécution.
//Gestion des erreurs
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

//Instantiation des handlers d'erreurs et d'exceptions
ErrorHandler::register();
ExceptionHandler::register();

//Service providers registration. Instatiation des différents services.
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path'=>__DIR__.'/../views/'
));
$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version'=>'v1'
));

//Register services
$app['dao.chocolat']= function($app){
    return new App\DAO\ChocolatDAO($app['db']);
};
$app['dao.comment']= function($app){
    $commentDAO= new App\DAO\CommentDAO($app['db']);
    $commentDAO->setChocolatDAO($app['dao.chocolat']);
    return $commentDAO;
};