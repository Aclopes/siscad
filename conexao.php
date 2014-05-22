
<?php

$conexao = mysql_connect("127.0.0.1", "root", "");
if (!$conexao) {
    die("Não foi possivel conectar ao BD,</br> erro detectado: " . \mysql_error());
}

mysql_set_charset('utf8', $conexao);
mysql_select_db("sis_academico");
?>