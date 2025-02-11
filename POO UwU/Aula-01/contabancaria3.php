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
$id->numerodaconta = "2468135790";
$id->titular = "Bruno Campos Fonseca";
$id->saldo = "R$ 1.250,00";
$id->saque = "R$ 45,30";
$id->deposito = "R$ 85,75";
echo $id->conta();


?>