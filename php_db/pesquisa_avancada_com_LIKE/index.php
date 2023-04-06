<?php
    define('HOST','localhost');
    define('DB','db_01');
    define('USER','root');
    define('PASS','');

    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::
            MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo '<h1>ERRO AO CONECTAR</h1>';

    }
    $sql = $pdo -> prepare("SELECT * FROM clients WHERE nome LIKE '%r%'");
    $sql->execute();
    $nome = $sql->fetchAll();
    print_r($nome);
?>