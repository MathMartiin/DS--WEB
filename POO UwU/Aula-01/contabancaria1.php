<?php

class conta{
    protected $numerodaconta ;
    protected $titular;
    private $saldo;
    protected $saque;
    private $deposito;

    private function depositar(){
        return "O saldo depositado foi de: R$">$this->deposito . ",00";
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
$id->numerodaconta = "1234567890";
$id->titular = "Matheus Martin Mota";
$id->saldo = "R$ 2.340,75";
$id->saque = "R$ 200,50";
$id->deposito = "R$ 150,00";
echo $id->conta();


?>