<?php

namespace src\miRonda;

require_once 'Ronda.php';


class Bitlles{

    public $tirada;
    
    function tirarBitlles(){
        $this->tirada = rand(0,10);
        return $this->tirada;
    }
}
