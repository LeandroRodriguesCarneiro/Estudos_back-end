<?php
class minha_classe  
{
    const VALOR = 300;
    public function __construct()
    {
        echo self::VALOR;
    }
}
//new minha_classe;
echo minha_classe::VALOR;
?>