<?php
//incluo minha conexão com o banco de dados
  include_once('conexao.php');

  $nome = $_POST['nome'];
  $email = $_POST['email'];

//inicio minha inserção no banco de dados
$sql = "INSERT INTO cliente (nome, email) VALUES ('$nome', '$email')";
    if (mysqli_query($conexao, $sql)) {
        echo "Novo cadastro inserido com sucesso!<br>";
        header('Location: index.php');
    } else {
        echo "Erro ao inserir: " . mysqli_error($conexao);
    }

    
?>