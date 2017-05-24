<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

ErrorHandler::register();
ExceptionHandler::register();

$app->register(new Silex\Provider\DoctrineServiceProvider());

$app['dao.chocolat']= function($app){
    return new App\DAO\ChocolatDAO($app['db']);
};