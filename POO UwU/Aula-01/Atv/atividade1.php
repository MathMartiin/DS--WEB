<?php

class Pessoa {

    public $nome;
    public $idade;

    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
    }
}

class funcionario extends Pessoa{
    protected $salario;

    public function salario(){
        $this->salario = 2500;
        return $this->salario;
    }
}

class gerente extends funcionario {
    public $bonus1;

    public function calcularbonus1(){
        $this->bonus1 = $this->salario * 1.2;
        return $this->bonus1;
        
    }
}

class desenvolvedor extends funcionario {
    public $bonus2;

    public function calcularbonus2(){
        $this->bonus2 = $this->salario * 1.1;
        return $this->bonus2;
    }
}

$individuo = new gerente();
$nm1 = new Pessoa();
$nm1->nome = "Roberto-Carlos";
$id1 = new Pessoa();
$id1->idade = "37";
$individuo2 = new desenvolvedor();
$nm2 = new Pessoa();
$nm2->nome = "George-Amado";
$id2 = new Pessoa();
$id2->idade = "20";

$individuo->salario();
$individuo2->salario();


//exibindo um dado publico
echo $nm1->nome."<br>";
echo $id1->idade."<br>";
echo "Seu salario é de " . $individuo->calcularbonus1();
echo "<br>";
echo "<br>";
echo $nm2->nome."<br>";
echo $id2->idade."<br>";
echo "Seu salario é de " . $individuo2->calcularbonus2();







?>