<?php
    session_start();
    session_unset();
    setcookie('login', $_SESSION['login'], -3600, '/session/');
    setcookie('senha', $_SESSION['senha'], -3600, '/session/');
    session_destroy();
    header('location: ./index.php');

?>