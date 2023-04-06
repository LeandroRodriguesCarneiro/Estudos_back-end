<?php
    $pdo = new PDO ('mysql:host=localhost;dbname=db_01','root','');
    //retorna somente os dados exstentes nas tabelas a serem juntas
    /*
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo -> prepare("SELECT * FROM `clients` INNER `cargos` ON `clients`.`cargo` = `cargos`.`id`");
    $sql -> execute();
    $clients = $sql -> fetchAll();
    foreach ($clients as $key => $value){
            echo $value ['nome'];
            echo ' | ';
            echo $value ['nome_cargo'];
            echo'<hr />';
    }
    */
//retorna os dados juntando as tabelas retoranado tudo da esquerda e juntando com dados compativeis com a direita
    /*
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo -> prepare("SELECT * FROM `clients` LEFT JOIN `cargos` ON `clients`.`cargo` = `cargos`.`id`");
    $sql -> execute();
    $clients = $sql -> fetchAll();
    foreach ($clients as $key => $value){
            echo $value ['nome'];
            echo ' | ';
            echo $value ['nome_cargo'];
            echo'<hr />';
    }
    */
//retorna os dados juntando as tabelas retoranado tudo da direita e juntando com dados compativeis com a esquerda
    /*
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo -> prepare("SELECT * FROM `clients` RIGHT JOIN `cargos` ON `clients`.`cargo` = `cargos`.`id`");
    $sql -> execute();
    $clients = $sql -> fetchAll();
    foreach ($clients as $key => $value){
            echo $value ['nome'];
            echo ' | ';
            echo $value ['nome_cargo'];
            echo'<hr />';
    }
    */
?>