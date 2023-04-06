<?php
    define('HOST','localhost');
    define('DB','db_01');
    define('USER','root');
    define('PASS','');

    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::
            MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo 'erro ao conectar';
    }
    $sql = $pdo -> prepare("SELECT * FROM `CLIENTS` GROUP BY cargo ORDER BY nome ASC LIMIT 3");//os tres podem ser usados em conjuto ou separados mas tem ordem para implementar
    $sql-> execute();
    $clients = $sql -> fetchAll();
    foreach ($clients as $key => $value){
            echo $value ['nome'];
            echo'<hr />';
    }

?>