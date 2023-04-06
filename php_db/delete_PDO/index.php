<?php

$pdo = new PDo('mysql:host=localhost;dbname=db_01' , 'root' , '');

$id = 5;

//OR funciona como 'ou'
//AND funciona comom 'e'

$sql = $pdo -> prepare("DELETE FROM `clientes` WHERE id=?");

if($sql->execute(array($id))){
    echo 'Meu banco de dados foi deletado com sucesso';
}



?>