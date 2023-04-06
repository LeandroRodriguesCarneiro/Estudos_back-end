<?php
   /* if(file_exists('file.txt')){
        echo 'o arquivo existe';
    }else{
        //vamos criar um arquivo novo
        $content = 'meu novo conteudo criado atraves dom php';
        file_put_contents('file.txt', $content);
    }*/
    //vamos criar um arquivo novo
    /*
        $content = "meu novo conteudo criado atraves do php \r\n outra linha \r\n outra linha";
        file_put_contents('file.txt', $content);
        */
        $content = file_get_contents('file.txt');//serve para fazer requisicoes externas
        echo nl2br($content);
        //unlink para deletar

?>