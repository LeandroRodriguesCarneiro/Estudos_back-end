<?php
    include("class1.php");
    include("class2.php");

    use \Sessao1\class1 as classe_exemplo;

    //$Class1 = new sessao1\class1();
    $Class1 = new classe_exemplo();

    

?>