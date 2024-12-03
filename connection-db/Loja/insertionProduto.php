<?php
//incluo minha conexão com o banco de dados
  include_once('conexao.php');

  $nome = $_POST['nome'];
  $valor = $_POST['valor'];
  $estoque = $_POST['estoque'];

//inicio minha inserção no banco de dados
$sql = "INSERT INTO Produto (nome, valor, estoque) VALUES ('$nome', '$valor', '$estoque')";
    if (mysqli_query($conexao, $sql)) {
        echo "Novo produto inserido com sucesso!<br>";
        header('Location: index.php');
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }

?>