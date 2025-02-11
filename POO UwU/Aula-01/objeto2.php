<?php

class caneta{
    public $cor ;
    public $modelo;
    public $marca;
    public $textura;
    public $durabilidade;

    public function escrever(){
        return "O">$this->marca . "foi escolhida";
    }
    public function riscar(){
        return "O">$this->modelo . "foi escolhido";
    }
    public function assinar(){
        return "O">$this->cor . "foi escolhida";
    }


}

//instanciando meus objetos

$item = new caneta();
$item->marca = "BIC";
$item->cor = "preta";
$item->preço= "2";
$item->textura = "liso";
$item->durabilidade = "forte";
echo $item->lapis();



?>