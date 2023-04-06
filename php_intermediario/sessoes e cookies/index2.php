<?php
    session_start();
    $_SESSION['nome'] = 'Leandro';
    $_SESSION['idade'] = 18;
    $_SESSION['local'] = 'maua da serra';

    session_destroy();  
    /*
    if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
    }
*/
?>