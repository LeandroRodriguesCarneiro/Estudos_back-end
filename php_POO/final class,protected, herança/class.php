<?php
    
    /*
    final class Filha {
        public function printHello(){
            echo 'hello word ';
        }
           
    }
    class Pai    {
        public function printBay(){
            echo 'bay word';
        }
    }
    */

    class Filha {
       /* protected function FuncaoTeste(){
            echo 'chamando funcao teste';
        }*/
        private function FuncaoTeste(){
            echo 'chamando funcao teste';
        }
        public function printHello(){
            $this->FuncaoTeste();
            echo '<br />';
            echo 'hello world ';
        }

    }
    class Pai  extends Filha {
        public function printHello(){
            parent::printHello();
            echo 'nova  funcao';
        }
        public function printBay(){
            echo 'bay world';
            echo '<br />';
          //  $this->FuncaoTeste();
        }
    }


?>