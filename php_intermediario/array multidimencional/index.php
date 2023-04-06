<?php
//array single
$arr =['leandro', 'guiherme'];
$arr = array ('guilerme','chave' =>'joao');
$arr[0] = 'leandro';
$arr[] = 'joao';

//array multidimencional
//$arr2 = array(array('leandro', 'guilherme'),array(18 ,23 ));
//$arr2[0] = array('chave1'=>'leandro', 'guilherme');
/*
$arr2 = array(array('leandro', 'guilherme'), array(18,23));
   // echo $arr2 [0][0];
    //echo $arr2 [0][1];   
    //echo $arr2 [1][0];
    echo $arr2 [1][1];
 */


$arr2[0]['chave1'] = 'Leandro';
echo $arr2[0]['chave1'];
 
?>