<?php
require_once ('animal.php');

class Ape extends Animal{
    public function get_legs(){
        return 2;
    }

    public function yell(){
        return "Auooo";
    }
}
?>