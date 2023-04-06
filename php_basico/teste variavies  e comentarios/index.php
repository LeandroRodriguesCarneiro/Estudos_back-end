<?php

//variaveis com letras tem a nessecidade de add ''
$nome = 'Leandro';
//variaveis com numeros nao tem a necessidade de uso de ''
$idade = 18;
//entretanto com uso de alguns simbulos operadores como +, -, /, * e % necessita de ''
$dataaniversario = '16/04/2003';
/*
    echo 'qual seu mome?';
    echo '<br/>';
    echo $nome;
    echo 'quando voce complta 18 anos?';
    echo '<br/>';
    echo $dataaniversario;
    echo '<br/>';
    echo 'qual sua idade?';
    echo '<br/>';
    echo $idade;
    */

//operadores
/*
$a = 15;
$b = 45;

    $soma = $a + $b;
    $subtracao = $a - $b;
    $multiplicao = $a * $b;
    $divisao = $a / $b;

    echo $divisao;
*/

//alguns operadores servem para fazer comparações = quantas veses um numero cabe dentro de %
/*
$comparar = 2020 % 6 ;
    echo $comparar;
*/

//variaveis com varios valoresusando numeros dentro [] iniciando apartir [0]
$informacoes = ['Leandro', 18, '16 de abril de 2003', 'aries'];
echo 'meu nome e';
echo '<br/>';
echo $informacoes[0];
echo '<br/>';
echo 'nasci dia';
echo '<br/>';
echo $informacoes[2];
echo '<br/>';
echo'e tenho';
echo $informacoes[1];
echo '<br/>';
echo 'meu signo e';
echo '<br/>';
echo $informacoes[3];




//existem tambem as comparacoes de igualdade e diferencas, exata, semelhanca
?>