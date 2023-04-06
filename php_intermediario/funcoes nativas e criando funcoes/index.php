<?php
$var = 'meu valor' ;
//algumas funcoes exigem parametros e outras nao
//$var2 = 'funcao'('parametro 1', 2, '3');
    function mostrarnome($nome, $idade){
        echo '<h2> nome e:  <h2>' .$nome;
        echo '<hr/>';  
        echo "idade : $idade";
    }
//mostrarnome('leandro', 18);
    function calculadora($A = 7, $B = 1000){
        echo ($B - $A);
    }
//calculadora(30,10000);
    function verdade(){
       return true;
    }
    function retornarString(){
        return 'leandro';
    }
  echo  retornarString();
$variavel1  = verdade();
?>