<?php

class lapis{
    public $cor ;
    public $preço;
    public $marca;
    public $intensidade;
    public $qualidade;

    public function escrever(){
        return "O">$this->marca . "foi escolhida";
    }
    public function pintar(){
        return "O">$this->cor . "foi escolhida";
    }
    public function riscar(){
        return "O">$this->preço . "foi escolhido";
    }


}

//instanciando meus objetos

$item1 = new lapis();
$item1->marca = "fabercastell";
$item1->cor = "rosa";
$item1->preço= "30";
$item1->intensidade = "forte";
$item1->qualidade = "boa";
echo $item1->lapis();



?>