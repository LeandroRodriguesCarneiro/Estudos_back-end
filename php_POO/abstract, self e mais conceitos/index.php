<?php
    abstract class Teste{
        public function func1(){
            echo 'chamando funcao 1';
        
        }
        abstract function func2();
    }
    class Principal2{
        public static function outrometodoestatico(){
            echo 'meu outro metodo estatico';
        }
    }
    class Principal extends Teste{
        public function func2(){
            echo 'estou declarando oficialmente um metodo abstrato';
        }

        public static function metodoestatico(){
            echo 'metodo estatico';
        }

        public function funcao(){
            //Principal::metodoestatico();
            //self::metodoestatico();
            Principal2:: outrometodoestatico();
        }
    }
    
   $Principal = new Principal;
   /*
   $Principal -> func1();
   $Principal -> func2();
   */
    $Principal ->funcao();
?>