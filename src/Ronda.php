<?php
namespace SrcRonda;
use SrcBowling\Bitlles;
class Ronda {
    public $miPrimerTiro;
    public $miSegundoTiro;

function ronda(){
    $primeraRonda = new Bitlles();

    $this->miPrimerTiro = $primeraRonda->tirarBitlles();

    if($this->miPrimerTriro<10){
        $this->miSegundoTiro = $primeraRonda->tirarBitlles();
    }
    return ['tiro1'=> $this->miPrimerTiro, 'tiro2'=> $this->miSegundoTiro];
}

}
