<?php
    include('exemplo.class.php');

    //instancia de objeto
    $exemplo = new Exemplo();
    $exemplo -> setvar1('Leandro');
    echo $exemplo ->pegaVar1();
    //$exemplo -> var1 = 'Ola';
    $exemplo -> var2 = 'Leandro';
    //echo $exemplo->var2;
echo'<hr />';
    $exemplo2 = new Exemplo;
    $exemplo2 -> setvar1('joao');
    echo $exemplo2 -> pegaVar1();
    /*
    echo $exemplo -> var2;
    echo'<br />';
    echo $exemplo2-> var2;
    
//nao funciona no com static
    //echo $exemplo -> var3;

    //Exemplo:: $var3 = 'outra variavel';
    //echo Exemplo:: $var3;
    //Exemplo:: MetodoEstatico();
*/
?>