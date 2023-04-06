<?php
    define('HOST','localhost');
    define('DB','db_01');
    define('USER','root');
    define('PASS','');

        try{
            $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::
                MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $pdo -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            echo '<h1>CONECTADO COM SUCESSO</h1>';
        }catch(Exception $e){
            echo '<h1>ERRO AO CONECTAR</h1>';
        }
        $pdo -> exec("LOCK TABLES `CLIENTS` WRITE");
        sleep(10);

?>