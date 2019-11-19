<?php
namespace SrcBowling;



class Bitlles{

    public $tirada=10;
    
    function setTirada($valor){
        $this->tirada = $valor;
    }

    function tirarBitlles(){
        $valorTirada = rand(0,$this->tirada);
        $this->setTirada($this->tirada - $valorTirada);
        return $valorTirada;
    }

}
