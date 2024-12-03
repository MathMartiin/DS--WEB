<?php
//incluo minha conexão com o banco de dados
  include_once('connection.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];

//inicio minha inserção no banco de dados
$sql = "INSERT INTO funcionario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conexao, $sql)) {
        echo "Novo registro inserido com sucesso!<br>";
        header('Location: index.php');
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }

?>