<?php

require 'Bitlles.php';

class Ronda {

    public $tirada;
    public $tirada2;

    function primeraTirada(){
        $this->tirada;
        return $this->tirada;
    }

    function segonaTirada($tirada){
        $this->tirada2= 10-$tirada;
        $this->tirada = Math.random(0,$tirada2);
        return $this->tirada;
    }

}
