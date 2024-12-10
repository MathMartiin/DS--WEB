<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="dashboard.php" method="POST">
            <h1>Login:</h1>
            <label>Login: </label>
            <input type="text" name="login" required>
            <br>
            <label>Senha: </label>
            <input type="text" name="senha" required>
            <br>
            <input type="submit">
        </form>
    </div>
</body>
</html>