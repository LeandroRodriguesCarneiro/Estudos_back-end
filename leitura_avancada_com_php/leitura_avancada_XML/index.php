<?php
//ler arquivo XML
    /*
    $xml = simplexml_load_file('file.xml');
    //echo $xml->informacoes->nome;
    echo $xml -> informacoes2 -> nome;
    */
//criando XML apartir de um array
/*
    $arr = ['Leandro'=>'nome','18'=>'idade'];
    $XML = new SimpleXMLElement('<root/>');
    array_walk_recursive($arr, array($XML, 'addchild'));
    file_put_contents('file.xml',$XML->asXML());
    $content = simplexml_load_file('file.xml');
    echo $content -> nome;
*/

function escreverxml($arr, $nomedoarquivo){
    $XML = new SimpleXMLElement('<root/>');
    array_walk_recursive($arr, array($XML, 'addchild'));
    file_put_contents('file.xml',$XML->asXML());
}
escreverxml(array('Leandro'=>'nome','18'=> 'idade','muay thay'=> 'esportes'),'file.xml');
$content = simplexml_load_file('file.xml');
echo $content -> esportes;
?>