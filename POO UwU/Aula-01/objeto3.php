<?php

class estojo{
    public $cor ;
    public $modelo;
    public $marca;
    public $preço;
    public $qualidade;

    public function guardar(){''
        return "O">$this->marca . "foi escolhida";
    }
    public function abrir(){
        return "O">$this->cor . "foi escolhida";
    }
    public function fechar(){
        return "O">$this->modelo . "foi escolhido";
    }


}

//instanciando meus objetos

$item = new estojo();
$item->marca = "kipling";
$item->cor = "preta";
$item->preço= "20";
$item->modelo = "2 divisões";
$item->qualidade = "boa";
echo $item->estojo();


?>