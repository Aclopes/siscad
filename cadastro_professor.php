<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Professor</title>
    </head>
    <body>
        <?php
        $nome = $_POST["professor"];
        $cpf = $_POST["cpf"];
        $endereco = $_POST["endereco"];
        $complemento = $_POST["complemento"];
        $cep = $_POST["cep"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $telefone = $_POST["telefone"];
        $formacao = $_POST["formacao"];
        $titulacao = $_POST["titulacao"];
        
        $sql = "INSERT INTO `sis_academico`.`professor` "
                . "(`cpf`, `nome`, `endereco`, `complemento`, `cep`, "
                . "`bairro`, `cidade`, `estado`, `telefone`, `formacao`, `titulacao`) "
                . "VALUES ('".$cpf."', '".$nome."', '".$endereco."', '".$complemento."',"
                . " '".$cep."', '".$bairro."', '".$cidade."', '".$estado."', "
                . " '".$telefone."', '".$formacao."', '".$titulacao."');";
        
        require 'conexao.php';
        $result = mysql_query($sql);

        if (!$result) {
            echo 'Fodeu alguma coisa: ' . mysql_error();
        } else {
            echo 'Cadastro OK</br> </br>';
            echo '<p><a href="index.php">Voltar para o Inicio</a></h1></p></br>';
            echo '<p><a href="cadastro_professor_form.php">Voltar para o cadastro do Professor</a></p>';
        }
        
        ?>
    </body>
</html>
