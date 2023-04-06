<?php
class pessoa{
     //objeto pessoa
        private $nome = 'Leandro';
        private $idade = '18';
        private $peso = '104Kg';
   
        public function crescer() {
            $this->comer();
        echo 'quero chegar a 1.90M';
        }
        private function comer() {
        echo 'quero comer menos';
        }
   
   
   
   
        public $cor_d_olhos = 'Meus olhos sao verdes mas mudam para azul';
}
    //Instanciar
    $pessoa = new pessoa;
    $pessoa2 = new pessoa; 
    $pessoa -> crescer();

?>