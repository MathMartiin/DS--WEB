<?php
    session_start();
    $logincerto = 'Matheus';
    $senhacerta = '40028922';
        //Verifica se veio do formulario
    if(isset($_POST['login'])){
        //verifica se o login esta correto
        if($logincerto == $_POST['login'] and $senhacerta == $_POST['senha']){
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['senha'] = $_POST['senha'];
        }
    }


    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        echo '<br>';
        print_r($_SESSION['login']);
        echo '<br>';
        print_r($_SESSION['senha']); 
    }else{
        header('location: ./index.php');
    }
    ?>
    <br>
    <a href="logout.php"><button>Logout</a> <a href="cookie.php"><button>Salvar</a>
</body>
</html>

