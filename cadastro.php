<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cadastro
 *
 * @author alexlopes
 */
class Cadastro {

    public $nome;
    public $endereco;

    function __construct($nome, $endereco) {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    function __destruct() {
        echo "<br>Elemento destruído: " . $this->nome;
    }

}

$dadosPessoa = new Cadastro("Maria", "Rua Lima de Castro");
echo $dadosPessoa->nome;
echo "<br>";
echo $dadosPessoa->endereco;
?>
