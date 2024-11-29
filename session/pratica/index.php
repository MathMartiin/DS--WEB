<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" type ="image/x-con" href="favicon.ico" >
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="menu-top">
    <h1>Sistema de Login</h1>
    <div class="container">
        <form action="dashboard.php" method="POST">
            <label>Login: </label>
            <input type="text" name="login">
            <br>
            <label>Senha: </label>
            <input type="text" name="senha">
            <br>
            <input type="submit">
        </form>
    </div>
    </div>
</body>

</html>

<?php
    session_start();
    if((isset($_SESSION['login']) and isset($_SESSION['senha'])) or (isset($_COOKIE['login']) and (isset($_COOKIE['senha'])))){
    header('location: ./dashboard.php');   
    }
    
?>

    