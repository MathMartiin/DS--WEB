<?php

class mouse{
    public $cor ;
    public $modelo;
    public $marca;
    public $preço;
    public $qualidade;

    public function guardar(){
        return "O">$this->marca . "foi escolhida";
    }
    public function abrir(){
        return "O">$this->cor . "foi escolhida";
    }
    public function fechar(){
        return "O">$this->preço . "foi escolhido";
    }


}

//instanciando meus objetos

$item = new mouse();
$item->marca = "dell";
$item->cor = "preta";
$item->preço= "80";
$item->modelo = "sem-fio";
$item->qualidade = "boa";
echo $item->mouse();




?>