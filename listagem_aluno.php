<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <title>Lista de Alunos</title>
    </head>
    <body>
        <?php
        $sql = "SELECT * FROM `aluno` LIMIT 0, 30 ";
        //abre a conexao
        require 'conexao.php';
        //joga o resultado em result
        $result = mysql_query($sql);
        $cabec = "<th>CFP</th><th>Nome</th><th>Endereço</th><th>complemento</th>"
                . "<th>cep</th><th>Bairro</th><th>Cidade</th><th>estado</th><th>telefone</th>       </tr>";
        //imprime
        echo '<table sumary = "esta tabela mostra a lista de alunos" > <tr>';
        echo $cabec;
        
        while ($dados = mysql_fetch_array($result)) {
                        echo("<tr> <td>".$dados [0]."</td> <td>".$dados [1]."</td>  <td>".$dados [2]."</td>  <td>".$dados [3]."</td>"
                                . " <td>".$dados [4]."</td>  <td>".$dados [5]."</td>  <td>".$dados [6]."</td>  <td>".$dados [7]."</td>  <td>".$dados [8]."</td>  </tr>" );
                    }
                    echo "</table>";
                    
        if (!$result) {
            echo 'Fodeu alguma coisa: ' . mysql_error();
        } else {
            echo '<p><a href="index.php">Voltar para o Inicio</a></h1></p><br>';
            echo '<p><a href="cadastro_aluno_form.php">Voltar para o cadastro de Aluno</a></p>';
        }
        ?>
    </body>
</html>
