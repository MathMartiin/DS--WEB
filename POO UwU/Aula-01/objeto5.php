<?php

class ventilador{
    public $cor ;
    public $modelo;
    public $marca;
    public $preço;
    public $numerodepas;

    public function ligar(){
        return "O">$this->marca . "foi escolhida";
    }
    public function desligar(){
        return "O">$this->cor . "foi escolhida";
    }
    public function ventilar(){
        return "O">$this->preço . "foi escolhido";
    }


}

//instanciando meus objetos

$item = new ventilador();
$item->marca = "mondial";
$item->cor = "preto";
$item->preço= "250";
$item->numerodapas = "3";
$item->modelo = "ventilador-de-teto";
echo $vermelho->ventilador();



?>