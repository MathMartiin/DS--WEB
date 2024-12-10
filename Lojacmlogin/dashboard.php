<?php
    session_start();

    //Verifica se veio do Formulário
    if(isset($_POST['login']) and isset($_POST['senha'])){
        include_once('conexao.php');
        $login = $_POST["login"];
        $senha = $_POST["senha"];
    
        $sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($conexao, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            $linha = mysqli_fetch_assoc($resultado);
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
        }
    }
    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        echo '<br>';
        echo '<h1>Bem Vindo';
        //echo $_SESSION['login'];
        //echo '<br>';
        //echo $_SESSION['senha'];
        echo '<br><br>';
        echo '<a href="cookie.php"><button>Salvar Cookies</button></a>';
        echo '<a href="cadastro.php"><button>Tela dos produtos</button></a>';
        echo '<a href="logout.php"><button>Logout</button></a>';
    }else{
        header('Location: index.php');
    }


    

?>

<link rel="stylesheet" href="style.css">