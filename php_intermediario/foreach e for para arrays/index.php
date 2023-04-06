<?php
   // $ar = array('cahve 1 '=>'Leandro', 'guilherme', 'joao', 'mario');
//meneiras de percorrer o array
/*
    foreach($ar as $key => $value){
        echo $key;
        echo '=>';
        echo $value;
        echo '<hr>';
    }
*/
    $arr = array('Leandro', 'guilherme', 'joao', 'mario');
    
    $total = count($arr);

    for($i = 0; $i < $total; $i++){
        echo $arr[$i];
        echo'<br/>';
        
    }

?>