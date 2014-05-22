<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Matricula</title>
    </head>
    <body>
        <p>Matricula do Aluno</p>
        <fieldset><legend>Matricula</legend>
            <form method="post" action="cadastro_matricula.php">
                <label for="aluno"> Aluno</label>
                <select name="aluno" id="select">
                    <option value="">Selecione o Aluno</option>
                    <?php
                    require("conexao.php");
                    $consulta = mysql_query("Select cpf,nome from aluno");
                    while ($dados = mysql_fetch_array($consulta)) {
                        echo("<option value = ".$dados [0].">".$dados [1]."</option>" );
                    }
                    ?>
                </select><br> 
                <label for="curso"> Curso</label>
                <select name="curso" id="select">
                    <option value="">Selecione o Curso</option>
                    <?php
                    require("conexao.php");
                    $consulta2 = mysql_query("Select id_curso,nome from curso");
                    while ($dados = mysql_fetch_array($consulta2)) {
                        echo("<option value = ".$dados [0].">".$dados [1]."</option>" );
                    }
                    ?>
                </select><br> 
                <br>
                <input type="reset" value="Limpar" name="limpar">
                <input type="submit" value="Enviar" name="enviar">
            </form>
            
        </fieldset>
        
    </body>
</html>
