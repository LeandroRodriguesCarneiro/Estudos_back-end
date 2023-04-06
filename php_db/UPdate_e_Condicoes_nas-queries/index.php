<?php

    $pdo = new PDO('mysql:host=localhost;dbname=db_01','root', '');

    $id = 3;
    /*
    $sql = $pdo -> prepare("UPDATE `clientes` SET nome = 'Mario', sobrenome = 'da Silva' WHERE id=$id");
    if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso';
    }
*/
/*
    $sql = $pdo -> prepare("UPDATE `clientes` SET nome = 'Mario', sobrenome = 'da Silva'");
        if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso';
        }
*/
//OR funciona comom "ou"
//AND funciona comom "e"
    $sql = $pdo -> prepare("UPDATE `clientes` SET nome = 'Erick', sobrenome = 'Hell' WHERE nome= 'Mario' OR nome='Leandro'");
        if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso';
        }


?>