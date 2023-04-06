<?php
    define('HOST','localhost');
    define('DB','db_01');
    define('USER','root');
    define('PASS','');
    
    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
        $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo'<h1> ERRO AO CONECTAR</h1>';
    }
    /*
    $sql = $pdo -> prepare("SELECT * FROM clients WHERE id IN(1,2,3)");
    $sql->execute();
    $nome = $sql->fetchAll();
    print_r($nome);
*/
    $sql = $pdo -> prepare("SELECT * FROM clientes WHERE `momento_registro` BETWEEN '2021-09-09' AND '2021-09-29'");
    $sql->execute();
    $nome = $sql->fetchAll();
    print_r($nome);
    
?>