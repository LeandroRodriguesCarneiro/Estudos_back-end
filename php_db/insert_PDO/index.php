<?php

    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=db_01', 'root', '');

    //$sql = $pdo -> prepare("INSERT INTO `clientes` VALUES (null,'Leandro','Rodrigues','2021-09-27 16:07:00')");
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

    $sql = $pdo -> prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
    $sql -> execute(array($nome,$sobrenome,$momento_registro));
    echo 'cliente inserido com sucesso!';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no banco</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" required>
        <input type="text" name="sobrenome" required>
        <input type="submit" name="acao" value="enviar">

    </form>
</body>
</html>