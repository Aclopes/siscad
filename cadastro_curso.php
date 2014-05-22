<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Cursos</title>
    </head>
    <body>
        <?php
        $nome = $_POST["nome"];
        $duracao = $_POST["duracao"].$_POST["tpDuracao"];
        $coordenador = $_POST["coordenador"];
        $nivel = $_POST["nivel"];
        $complemento = $_POST["complemento"];
        
        $sql = "INSERT INTO `sis_academico`.`curso` ( `nome`, `duracao`, `coordenador`, `nivel`, `complemento`) "
                . "VALUES ( '".$nome."', '".$duracao."', '".$coordenador."','".$nivel."', '".$complemento."');";
        
        require 'conexao.php';
        $result = mysql_query($sql);

        if (!$result) {
            echo 'Fodeu alguma coisa: ' . mysql_error();
        } else {
            echo 'Cadastro OK<br> <br>';
            echo '<p><a href="index.php">Voltar para o Inicio</a></h1></p><br>';
            echo '<p><a href="cadastro_curso_form.php">Voltar para o cadastro de Cursos</a></p>';
        }
        
        ?>
    </body>
</html>
