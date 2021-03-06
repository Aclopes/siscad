<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Aluno</title>
        <script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
        <script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#cpf").mask("999.999.999-99");
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#cep").mask("99.999-999");
        });
    </script>
</head>
<body>
    <p> Preencher os dados do Aluno</p>
    <fieldset><legend>Cadastro de Aluno</legend>
        <form method = "post" action="cadastro_aluno.php">
            <label for="aluno">Nome:</label>
            <input type="text" id="aluno" name="aluno" size=100 autofocus required /></br>
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" required name="cpf"/></br>
            <label>Sem ponto ou traço</label></br>
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" required size=100 /></br>
            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento" size=20 /></br>
            <label for="cep">Cep:</label>
            <input type="text" id="cep" name="cep" size=10 required /></br>
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" /></br>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" required size=100 /></br>
            <label for="estado">Estado:</label>
            <select name="estado" id="select" required>
                <option value="">Selecione o Estado</option>
                <option value="ac">Acre</option>
                <option value="al">Alagoas</option>
                <option value="am">Amazonas</option>
                <option value="ap">Amapá</option>
                <option value="ba">Bahia</option>
                <option value="ce">Ceará</option>
                <option value="df">Distrito Federal</option>
                <option value="es">Espirito Santo</option>
                <option value="go">Goias</option>
                <option value="ma">Maranhão</option>
                <option value="ms">Mato Grosso do Sul</option>
                <option value="mt">Mato Grosso</option>
                <option value="mg">Minas Gerais</option>
                <option value="pa">Pará</option>
                <option value="pb">Paraíba</option>
                <option value="pr">Paraná</option>
                <option value="pe">Pernambuco</option>
                <option value="pi">Piauí</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="ro">Rondônia</option>
                <option value="rr">Roraima</option>
                <option value="sc">Santa Catarina</option>
                <option value="sp">São Paulo</option>
                <option value="se">Sergipe</option>
                <option value="to">Tocantins</option>
            </select></br>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" size=100 /></br>
            <input type="reset" value="Limpar" name="limpar">
            <input type="submit" value="Enviar" name="enviar">
        </form>
    </fieldset>
</body>
</html>