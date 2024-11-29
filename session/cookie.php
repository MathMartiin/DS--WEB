<?php
    //Criando um Cookie
    setcookie("usuario", "Carol", time() + 7 * 24 * (60*60), '/session/');
    setcookie("usuarioAntigo", "Bruno", time() + 7 * 24 * (60*60), '/session/');

    //Destruindo um Cookie
    //setcookie("usarioAntigo", "Bruno", -3600, '/');
    print_r($_COOKIE);
?>