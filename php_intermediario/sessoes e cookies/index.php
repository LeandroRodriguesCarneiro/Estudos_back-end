<?php
    session_start();
    setcookie('nome', 'Leandro',time() - (60 * 60 * 24),'/');
    echo $_COOKIE['nome'];
?>