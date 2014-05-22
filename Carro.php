<?php

use Carro;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carro
 *
 * @author alexlopes
 */
class Carro {

    function __construct() {
        echo "Construção da classe Carro<br>";
    }

    function marca() {
        echo "O Fabricante do carro é a Montadora XPTK<br>";
    }

    function __destruct() {
        echo "Destruição da classe Carro<br>";
    }

}

class CarroPasseio extends Carro {

    function __construct() {
        parent::__construct();
        echo "Construção da classe CarroPasseio<br>";
    }

    function __destruct() {
        parent::__destruct();
        echo "Destruição da classe CassoPasseio<br>";
    }

}

$obj = new CarroPasseio();
$obj->marca();

abstract class Classe1 {

    abstract function recebeTexto($texto);
}

class Classe2 extends Classe1 {

    function recebeTexto($texto) {
        echo "O texto $texto foi recebido.";
    }

}

$classeh = new Classe2;
$classeh->recebeTexto("Memórias Póstumas de Brás Cubas");
?>
