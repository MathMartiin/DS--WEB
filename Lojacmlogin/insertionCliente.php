<?php
//incluo minha conexão com o banco de dados
  include_once('conexao.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

//inicio minha inserção no banco de dados
$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conexao, $sql)) {
        echo "Novo cadastro inserido com sucesso!<br>";
        header('Location: cadastro.php');
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }

    
?>