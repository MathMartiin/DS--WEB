<?php
//incluo minha conexão com o banco de dados
  include_once('conexao.php');

  $nome = $_POST['nome'];
  $descricao = $_POST['descricao'];
  $preco = $_POST['preco'];

//inicio minha inserção no banco de dados
$sql = "INSERT INTO Produto (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
    if (mysqli_query($conexao, $sql)) {
        echo "Novo produto inserido com sucesso!<br>";
        header('Location: cadastro.php');
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }

?>