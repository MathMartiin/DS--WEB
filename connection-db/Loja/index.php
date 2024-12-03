<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <form action="insertionCliente.php" method="POST">
        <h1>Cliente</h1>
        <label>Nome: </label>
        <input type="text" name="nome">
        <br><br>
        <label>Email: </label>
        <input type="text" name="email">
        <br>
        <input type="submit">
        <br><br>
        <div class="list-two">
        <?php include "cliente.php"?>
        </div> 
    </form>

    <form action="insertionProduto.php" method="POST">
        <h1>Produto</h1>
        <label>Nome: </label>
        <input type="text" name="nomep">
        <br><br>
        <label>Valor: </label>
        <input type="text" name="valor">
        <br><br>
        <label>Estoque: </label>
        <input type="text" name="estoque">
        <br>
        <input type="submit">
        <br><br>
        <div class="list-one">
        <?php include "produto.php"?>
        </div>

    </form>
    </div>
    </div>
    <br><br><br>
    
</body>
</html>