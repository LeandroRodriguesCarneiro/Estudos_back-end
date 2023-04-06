<?php
        $pdo = new PDO ('mysql:host=localhost;dbname=db_01','root','');
        $pdo-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$sql = $pdo -> prepare("SELECT * FROM `CLIENTS` GROUP BY cargo LIMIT 2");//GOUP BY agrupa ORDER BY ordena
        //$sql = $pdo -> prepare("SELECT * FROM `CLIENTS` ORDER BY cargo DESC LIMIT 3");// ORDER vem antes do LIMIT, DESC ordem crescente com base na coluna chamada, DESC ordem decrescente com base na coluna
        $sql = $pdo -> prepare("SELECT * FROM `CLIENTS` GROUP BY cargo ORDER BY nome ASC LIMIT 3");//os tres podem ser usados em conjuto ou separados mas tem ordem para implementar
        $sql-> execute();
        $clients = $sql -> fetchAll();
        foreach ($clients as $key => $value){
                echo $value ['nome'];
                echo'<hr />';
        }
//se usar numeros comvigula por ex 0,3 inicia no primeiro e vai ate o tres se usar 1,3 inicia no segundo
?>