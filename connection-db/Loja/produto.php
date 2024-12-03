<?php

    include_once('conexao.php');

    $sql = "SELECT * FROM produto ORDER BY nome ASC";
    $resultado = mysqli_query($conexao, $sql);
    // Verificar se há registros
    if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $linha['id'] . " Nome: " . $linha['nome'] . "<br>" . " Valor: " . $linha ['valor'] . "<br>" . " Estoque: " . $linha ['estoque']. "<br>";}
    } else {
    echo "Nenhum registro encontrado.";
    }

    ?>