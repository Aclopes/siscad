<?php

require_once __DIR__."/../vendor/autoload.php";
$app = new Silex\Application();
$app['debug'] = TRUE;

$app->register(new Silex\Provider\TwigServiceProvider(),array(
    'twig.path' => __DIR__."/../views"
));

$app->get("/ola", function(){

    echo 'Olá Mundo';
});
?>
