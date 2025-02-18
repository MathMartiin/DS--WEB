<?php
abstract class Animal {
    public function fazerSom(){}
}

class cachorro extends Animal {
    public function falar(){
        return "Late";
    }
    public function mover() {
        echo "Andar de quatro patas";
    }
}
class passaro extends Animal {
    public function falar() {
        echo "Au Au!";
    }
    public function mover() {
        echo "Voa e Anda";
    }
}
class gato extends Animal {
    public function falar() {
        echo "Mia!";
    }
    public function mover() {
        echo "Andar de quatro patas";
    }
}

$pluto = new cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "-------------------------<br/>";

$garfield = new gato();

echo $garfield->falar() . "<br/>";
echo $garfield->mover() . "<br/>";

echo "-------------------------<br/>";

$piupiu = new passaro();

echo $piupiu->falar() . "<br/>";
echo $piupiu->mover() . "<br/>";

?>