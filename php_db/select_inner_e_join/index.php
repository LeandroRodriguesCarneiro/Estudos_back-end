<?php
    $pdo = new PDO('mysql:host=localhost;dbname=db_01' , 'root' , '');
    /*
    $sql = $pdo ->prepare("SELECT * FROM posts WHERE categoria_id = ?");
    $sql->execute(array($_GET['categoria_id']));
    
    $info = $sql->fetchAll();

    //puxar dados da tabela
 acessa o banco de dados como array
    echo '<pre>';
    print_r($info);
    echo '</pre>';

for($i=0; $i<count($info); $i++){
    echo 'Titulo: '. $info[$i]['titulo'];
    echo '<br />';
    echo 'Noticia: '. $info[$i]['conteudo'];
    echo '<hr />';

}


foreach($info as $key => $value ){
    echo 'Titulo: '. $value['titulo'];
    echo '<br />';
    echo 'Noticia: '. $value['conteudo'];
    echo '<hr />';
    }
*/
/*
$sql = $pdo ->prepare("SELECT * FROM categoria");

$sql->execute();

$info = $sql->fetchAll();

foreach($info as $key => $value ){

    $categoria_id = $value['id'];
    
    echo 'exibindo posts de: '.$value['nome'];
    echo'<br / >';

    $sql = $pdo-> prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
    $sql-> execute();
    $InfoPosts = $sql-> fetchAll();
    foreach($InfoPosts as $key => $value ){
    echo 'Titulo: '. $value['titulo'];
    echo '<br />';
    echo 'Noticia: '. $value['conteudo'];
    echo '<hr />';
    }
}
*/
$sql = $pdo -> prepare ("SELECT `posts`.*,`categoria`.*, `posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categoria` ON `posts`.`categoria_id` = `categoria`.`id`");
$sql-> execute();
$info = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($info);
    echo '</pre>';

?>