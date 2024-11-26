<?php

$produtos = array(
    array('nome' => 'bolsa', 'preco' => 100, 'estoque' => 40),
    array('nome' => 'garrafa', 'preco' => 20, 'estoque' => 85),
    array('nome' => 'estojo', 'preco' => 20, 'estoque' => 100)
);

foreach($produtos as $produto){
    echo "Produto e preços:" . $produto['nome'] . " " . $produto['preco'] . "<br>";
}

echo "<br>";

foreach($produtos as $produto){
    $estoquetotal = ($produto['preco'] * $produto['estoque']);
    echo "Valor Total " . $produto['nome'] . ": ". $estoquetotal . "<br>";
}


$alunos = array(
    array('nome' => 'Bruno', 'matematica' => 6, 'portugues' => 9),
    array('nome' => 'Gustavo C', 'matematica' => 10, 'portugues' => 5),
    array('nome' => 'Gustavo S', 'matematica' => 8, 'portugues' => 7)
    );

 echo "<br>";
    
foreach($alunos as $aluno){
    $media = ($aluno['matematica'] + $aluno['portugues'])/3;
    echo "Media:" .$aluno['nome'] ." " . $media . "<br>"; 
}


?>