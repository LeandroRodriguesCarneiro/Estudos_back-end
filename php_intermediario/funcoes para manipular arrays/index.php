<?php


//$array1 = array("chave1" => "valor1","chave2" => "valor2");
//$array2 = array("chave3" =>"valor3","chave4" => "valor4");

//serve para unir 1 ou mais arrays
/*
$result = array_merge($array1,$array2);
print_r($result);
*/

//serve para retornar valores com a mesma chave em um ou mais arrays
/*
$array1 = array("chave1" => "valor1","chave2" => "valor2");
$array2 = array("chave1"=>"outro valor","chave3" =>"valor3","chave4" => "valor4");
print_r(array_intersect_key($array1,$array2));
*/
//serve para aplicar uma funcao em todos os valores do array
/*
$arr = ['<p>Leandro</p>','Guilerme', '<h1>Joao</h1>'];
print_r(array_map('strip_tags', $arr));
*/
?>
