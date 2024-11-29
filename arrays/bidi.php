<?php
//Bidimencional dos produtos com nome, preço e quantidade no estoque
$produtos = array(
    array('nome' => 'bolsa', 'preco' => 100, 'estoque' => 40),
    array('nome' => 'garrafa', 'preco' => 20, 'estoque' => 85),
    array('nome' => 'estojo', 'preco' => 20, 'estoque' => 100)
);
//Abri cada array e printa o preço e o produto
foreach($produtos as $produto){
    echo "Produto e preços:" . $produto['nome'] . " " . $produto['preco'] . "<br>";
}

echo "<br>";
//pega o preço de cada produto e multiplica pelo estoque
foreach($produtos as $produto){
    $estoquetotal = ($produto['preco'] * $produto['estoque']);
    echo "Valor Total " . $produto['nome'] . ": ". $estoquetotal . "<br>";
}

//Bidimencional dos alunos e suas notas
$alunos = array(
    array('nome' => 'Bruno', 'matematica' => 6, 'portugues' => 9),
    array('nome' => 'Gustavo C', 'matematica' => 10, 'portugues' => 5),
    array('nome' => 'Gustavo S', 'matematica' => 8, 'portugues' => 7)
    );

 echo "<br>";
//Tira a média dos alunos somando e dividindo pela quantidade de matérias    
foreach($alunos as $aluno){
    $media = ($aluno['matematica'] + $aluno['portugues'])/2;
    echo "Media:" .$aluno['nome'] ." " . $media . "<br>"; 
}
?>