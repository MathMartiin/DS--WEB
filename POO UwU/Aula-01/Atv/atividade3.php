<?php

//Classe Pai
class veiculo {

    public $marca;
    public $modelo;
    private $velocidade;

    
    public function getDefinir() {
        return "A">$this->marca . "foi escolhida";
    }

    public function setExibirVelo($n) {
        return "A">$this->velocidade . "foi alcançada";
    }
}

//Classe filho
class carro extends veiculo {

    public function Acelerar() {
        echo "Pedal";
    }

}

class moto extends veiculo {

    public function acelerar() {
        echo "Manopla";
    }
}

$Porshe911 = new carro();

echo $Porshe911->acelerar() . "<br/>";


echo "-------------------------<br/>";

$kawasaki = new moto();

echo $kawasaki->acelerar() . "<br/>";

echo "-------------------------<br/>";

?>