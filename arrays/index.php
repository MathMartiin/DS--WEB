<?php
/*Criando um array*/
$frutas = array ("Uva", "Morango", "Maça", "Banana", "Goiaba");
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

array_push($frutas, "Laranja");
echo "<br>";
/*Exibindo com foreach*/

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
echo "<br>";
/*Colocando em ordem*/
sort($frutas);

foreach ($frutas as $fruta){
    echo $fruta . "<br>";
}

echo "<br>";
echo "<br>";

/*Criando um array associativo */
$produtos["nome"] = "teclado";
$produtos["preco"] = 120;
$produtos["estoque"] = 15;

foreach ($produtos as $produto){
    echo $produto . "<br>";
}

echo "<br>";
echo "<br>";
/*Modificando o preço do teclado */
$produtos["preco"] = 39;

foreach ($produtos as $produto) {
    echo $produto . "<br>";
}
/* Multiplicando o preço do produto pela quantidade no estoque */
$valortotal = $produtos["preco"] * $produtos["estoque"];

echo $valortotal;

echo "<br>";
echo "<br>";
/*Juntando duas tabelas */
$produt = array ("Teclado", "Mouse", "Monitor");
$prec = array (150.00, 80.00, 1200.00);

$br = array_combine($produt, $prec);

print_r($br);

echo "<br>";
echo "<br>";
/*Identificando se a cor verde esta na tabela */
$cores = array ("vermelho", "azul", "verde", "amarelo", "preto");

if(in_array("verde", $cores)){
    echo "Cor encontrada";
}

echo "<br>";
echo "<br>";
/* Somando números inteiros */
$numero = array (1,2,3,4,5,6,7,8,9);
$total = array_sum($numero);
print_r($total);

?>


