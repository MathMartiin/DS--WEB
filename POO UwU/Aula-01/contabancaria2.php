<?php

class conta{
    protected $numerodaconta ;
    protected $titular;
    private $saldo;
    protected $saque;
    private $deposito;

    private function depositar(){
        return "Os seus">$this->deposito . "foi depositado";
    }
    private function sacar(){
        return "Os seus">$this->saque . "foi sacado";
    }
    private function transferir(){
        return "Os seus">$this->saldo . "foi transferido";
    }


}

//instanciando meus objetos

$id = new conta();
$id->numerodaconta = "9876543210";
$id->titular = "Gustavo Sartorelli de Lima";
$id->saldo = "R$ 5.678,905";
$id->saque = "R$ 450,00";
$id->deposito = "R$ 215,00";
echo $id->conta();


?>