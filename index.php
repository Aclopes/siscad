<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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

<!--
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <p> <h1><a href="cadastro_aluno_form.php">Cadastro Aluno</a></h1></p>
        <p> <h1><a href="listagem_aluno.php">Listagem Aluno</a></h1></p>
        <p> <h1><a href="cadastro_professor_form.php">Cadastro Professor</a></h1></p>
        <p> <h1><a href="listagem_professor_param.php" target="_blank">Listagem Professor</a></h1></p>
        <p> <h1><a href="cadastro_curso_form.php">Cadastro Curso</a></h1></p>
        <p> <h1><a href="cadastro_matricula_form.php">Cadastro de Matricula</a></h1></p>

    </body>
</html> -->
