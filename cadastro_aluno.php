<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Aluno</title>
    </head>
    <body>
        <?php
        $nome = $_POST["aluno"];
        $cpf = ereg_replace('[^0-9]', '', $_POST["cpf"]);
        $endereco = $_POST["endereco"];
        $complemento = $_POST["complemento"];
        $cep = $_POST["cep"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];
        $telefone = $_POST["telefone"];

        If (!validaCPF($cpf)) {
            echo 'CPF Errado!!';
            return;
        };


        $sql = "INSERT INTO `sis_academico`.`aluno` "
                . "(`cpf`, `nome`, `endereco`, `complemento`, "
                . "`cep`, `bairro`, `cidade`, `estado`, `telefone`) "
                . "VALUES ('" . $cpf . "', '" . $nome . "', '" . $endereco . "',"
                . " '" . $complemento . "', '" . $cep . "','" . $bairro . "', '" . $cidade . "',"
                . " '" . $estado . "', '" . $telefone . "');";
        require 'conexao.php';
        $result = mysql_query($sql);

        if (!$result) {
            echo 'Fodeu alguma coisa: ' . mysql_error();
        } else {
            echo 'Cadastro OK<br> <br>';
            echo '<p><a href="index.php">Voltar para o Inicio</a></h1></p><br>';
            echo '<p><a href="listagem_aluno.php">Listar Alunos</a></h1></p><br>';
            echo '<p><a href="cadastro_aluno_form.php">Voltar para o cadastro de Aluno</a></p>';
        }

        //funcao para validar o CPF
        function validaCPF($cpf = null) {

            // Verifica se um número foi informado
            if (empty($cpf)) {
                return false;
            }

            // Elimina possivel mascara
            $cpf = ereg_replace('[^0-9]', '', $cpf);
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

            // Verifica se o numero de digitos informados é igual a 11 
            if (strlen($cpf) != 11) {
                return false;
            }
            // Verifica se nenhuma das sequências invalidas abaixo 
            // foi digitada. Caso afirmativo, retorna falso
            else if ($cpf == '00000000000' ||
                    $cpf == '11111111111' ||
                    $cpf == '22222222222' ||
                    $cpf == '33333333333' ||
                    $cpf == '44444444444' ||
                    $cpf == '55555555555' ||
                    $cpf == '66666666666' ||
                    $cpf == '77777777777' ||
                    $cpf == '88888888888' ||
                    $cpf == '99999999999') {
                return false;
                // Calcula os digitos verificadores para verificar se o
                // CPF é válido
            } else {

                for ($t = 9; $t < 11; $t++) {

                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }

                return true;
            }
        }
        ?>
    </body>
</html>
