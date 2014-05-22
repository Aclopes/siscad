<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('class/tcpdf/tcpdf.php');
include_once("class/PHPJasperXML.inc.php");
include_once ('setting.php');

$cpfini = $_POST["cpf"];
$cpffim = $_POST["cpff"];

$PHPJasperXML = new PHPJasperXML();
$PHPJasperXML->arrayParameter = array("param1" => $cpfini, "param2" => $cpffim);
$PHPJasperXML->load_xml_file("report/professores.jrxml");
$PHPJasperXML->transferDBtoArray($server, $user, $pass, $db);
$PHPJasperXML->outpage("I", "professor.pdf");
?>

