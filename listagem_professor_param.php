<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listagem Professor</title>
    </head>
    <body>
        <fieldset>
            <form action="listagem_professor.php" method="post">
                <label for="cpf">Do CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="Coloque o cpf inicial"/><br>
                <label for="cpff">Até o CPF</label>
                <input type="text" id="cpff" name="cpff" placeholder="Coloque o cpf final"/><br>
                <input type="reset" value="Limpar" name="limpar">
                <input type="submit" value="Enviar" name="enviar">
            </form>
        </fieldset>
    </body>
</html>
