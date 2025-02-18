<?php
abstract class produto {

    public $nome;
    public $preco;
    public $estoque;

    abstract function calculardesconto();   
}

class eletronico extends produto {
    public function calculardesconto() {
        if($this->estoque >= 5){
            return $this-> preco * 0.9;
        }
        else{
            return $this->preco * 0.9 * 0.9;
        }
    }
}

class roupa extends produto {
    public function calculardesconto(){
        if($this->estoque >= 5){
            return $this-> preco * 0.8;
        }else{
           return  $this->preco * 0.8 * 0.9;
        }
    }
}

$jaqueta = new roupa();
$jaqueta->preco = "100";
$jaqueta->estoque = "50";
$celular = new eletronico();
$celular->preco = "1000";
$celular->estoque = "4";

echo "<br>";

echo "Seu preço é de" . " " . $jaqueta->calculardesconto();
echo "<br>";
echo "Seu preço é de" . " " . $celular->calculardesconto();
?>