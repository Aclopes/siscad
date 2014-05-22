<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $id_aluno = $_POST["aluno"];
        $id_curso = $_POST["curso"];
        
        //echo $id_aluno."  ";
        //echo $id_curso;
        
        
        $sql = "INSERT INTO `sis_academico`.`matricula` ( `id_curso`, `id_aluno`) "
                . "VALUES ( '".$id_curso."',".$id_aluno." );";
        
        //echo '<br>'.$sql;
        
        require 'conexao.php';
        $result = mysql_query($sql);

        if (!$result) {
            echo 'Fodeu alguma coisa: ' . mysql_error();
        } else {
            echo 'Cadastro OK<br> <br>';
            echo '<p><a href="index.php">Voltar para o Inicio</a></h1></p><br>';
            echo '<p><a href="cadastro_matricula_form.php">Voltar para o cadastro de Matricula</a></p>';
        }
        ?>
    </body>
</html>
