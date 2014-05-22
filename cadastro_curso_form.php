<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Cursos</title>
    </head>
    <body>
        <p> Preencher os dados do Curso</p>
        <fieldset><legend>Cadastro de Cursos</legend>
            <form method = "post" action="cadastro_curso.php">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" size=100 /><br>
                <label for="duracao">Duracao:</label>
                <input type="text" id="duracao" name="duracao"/>
                <select name="tpDuracao" id="select">
                    <option value="">Selecione o tipo</option>
                    <option value="m">Meses</option>
                    <option value="d">Dias</option>
                    <option value="a">Anos</option>
                </select><br>
                <label for="coordenador">Coordenador:</label>
                <select name="coordenador" id="select">
                    <option value="">Selecione o Coordenador</option>
                    <?php
                    require("conexao.php");
                    $consulta = mysql_query("Select cpf,nome from professor");
                    while ($dados = mysql_fetch_array($consulta)) {
                        echo("<option value = ".$dados [0].">".$dados [1]."</option>" );
                    }
                    ?>
                </select><br>
                <label for="Nivel">Nivel do Curso:</label>
                <select name="nivel" id="select">
                    <option value="">Selecione o Nivel</option>
                    <option value="tecnico">Tecnico</option>
                    <option value="graduacao">Graduação</option>
                    <option value="mestrado">Mestrado</option>
                    <option value="doutorado">Doutorado</option>
                </select><br>
                <label for="complemento">Complemento:</label>
                <input type="text" id="complemento" name="complemento" /><br>
                <br>
                <input type="reset" value="Limpar" name="limpar">
                <input type="submit" value="Enviar" name="enviar">
            </form>
        </fieldset>
    </body>
</html>