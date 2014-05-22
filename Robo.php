<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Robo
 *
 * @author alexlopes
 */
class Robo {

    public $nome;

    public function roboEnviaMensagem($mensagem) {
        echo "O robô $this->nome está enviando a seguinte mensagem: $mensagem";
    }

}

class RoboVoador extends Robo {

    public $nomeV;

    public function roboVoa() {
        echo "Mensagem da classe derivada: Neste momento, o robô voador $this->nomeV está voando.";
    }

}

class RoboAndador extends Robo {

    public $nomeA;

    public function roboAnda() {
        echo "Mensagem da classe derivada: Neste momento, o robô andador $this->nomeA está andando";
    }

}

$robo1 = new RoboVoador();
$robo1->nomeV = "AERO";
$robo1->nome = "AERO";
$robo2 = new RoboAndador();
$robo2->nomeA = "TERRAC";
$robo2->nome = "TERRAC";
echo "<br>";
$robo1->roboEnviaMensagem("Vou levantar voo.");
echo "<br>";
$robo1->roboVoa();
echo "<br><br>";
$robo2->roboEnviaMensagem("Vou começar a andar.");
echo "<br>";
$robo2->roboAnda();


abstract class Robo {

    public abstract function roboEnviaMensagem($mensagem);
}

class RoboVoador extends Robo {

    public $nomeV;

    public function roboEnviaMensagem($mensagem) {
        echo "O robô $this->nomeV está enviando a seguinte mensagem: $mensagem";
    }

    public function roboVoa() {
        echo "Mensagem da classe derivada: Neste momento, o robô voador $this->nomeV está voando.";
    }

}

class RoboAndador extends Robo {

    public $nomeA;

    public function roboEnviaMensagem($mensagem) {
        echo "O robô $this->nomeA está enviando a seguinte mensagem: $mensagem";
    }

    public function roboAnda() {
        echo "Mensagem da classe derivada: Neste momento, o robô andador $this->nomeA está andando.";
    }

}

$robo1 = new RoboVoador();
$robo1->nomeV = "AERO";
$robo2 = new RoboAndador();
$robo2->nomeA = "TERRAC";
echo "<br>";
$robo1->roboEnviaMensagem("Vou levantar voo.");
echo "<br>";
$robo1->roboVoa();
echo "<br>";
$robo2->roboEnviaMensagem("Vou começar a andar.");
echo "<br>";
$robo2->roboAnda();
