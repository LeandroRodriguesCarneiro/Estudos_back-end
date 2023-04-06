<?php
//durma o codigo por x segundos
/*
sleep(3);

echo 'um';

sleep(3);

echo 'dois';

sleep(3);

echo 'tres';
*/
//para de executar o codigo aprtir do die
$nome = 'guilherme';
if($nome == 'leandro'){
    //continuamos o codigo
    echo 'tudo certo';
}else{
    die("o script parou de ser executado");
}
sleep(3);

echo 'um';

sleep(3);

echo 'dois';

sleep(3);

echo 'tres';
?>