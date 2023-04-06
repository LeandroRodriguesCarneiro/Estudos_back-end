<?php
    //public funciona em qualquer lugar
    //private so pode ser acessado dentro da classe
    class Exemplo{
        private $var1;
        public $var2;
/*
        public static $var3 = 'estatico';

        public function metodo(){

        }

        public static function MetodoEstatico(){
           // echo 'metodo estatico';
        }
        private function metodo2(){

        }
*/      
        public function setvar1($var1){
            $this->var1 = $var1;
        }
        public function pegaVar1(){
            return $this -> var1;
        }
    }


?>