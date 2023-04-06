<?php
$conteudo = "Lorem Ipsum é simplesmente um texto fictício da indústria de impressão e composição. 
            Lorem Ipsum tem sido o texto fictício padrão da indústria desde 1500, quando um impressor 
            desconhecido pegou um modelo de impressão e embaralhou-o para fazer um livro de amostra de
             tipos. Ele sobreviveu não apenas cinco séculos, mas também ao salto para a composição 
             eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com 
             o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum e, mais recentemente, 
             com software de editoração eletrônica como Aldus PageMaker incluindo versões de Lorem Ipsum.";

//serve para recortar uma string
//echo substr($conteudo,0,30);
$nome = 'Leandro Rodrigues Carneiro';

$nomes = explode(' ', $nome);
//print_r($nomes);
//seve para juntar um arrey com delimitador.
//no caso o espaco.
$nomes = implode(' ', $nomes);
//echo $nomes;

//strip_tags serve para tirar todo o codigo HTLM
$conteudo = '<h1>Leandro</h1>Outra coisa';
//echo strip_tags($conteudo);

//mostra o Codigo HTLM da pagina de forma resumida
echo htmlentities( '<div> </div>');


?>