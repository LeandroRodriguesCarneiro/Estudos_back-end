<?php
include('interface1.php');

class teste implements interface1{

    public function printOnscreen($par){
        echo $par;
    }

}
$teste = new teste;
$teste ->printOnscreen('ola mundo!')
?>