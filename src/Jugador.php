<?php
namespace SrcJugador;
include '../vendor/autoload.php';
use SrcRonda\Ronda;


class Jugador {
    public $jugador;
    public $TotalVader = 0;
    public $TotalYoda = 0;
    
function setJugador($valor){
    $this->jugador = $valor;
}

function getJugador(){
    return $this->jugador;
}

function jugarRonda(){
    
    $jugarUnaRonda= $this->getJugador();

    
    if ($partidaUno == 'vader'){
        var_dump($partidaUno);
        $partida1 = new Ronda();
        $ronda1 = $partida1->rondaUno();
        $ronda2 = $partida1->rondaUno();
        $this->TotalVader += $partida1;


    }
    
    if ($partidaUno == 'yoda'){
        $partida1 = new Ronda();
        $partida1->rondaUno();
        $this->TotalYoda += $partida1;
        
    }
}
}

if (isset($_POST['jugadores'])){

    $jugador = new Jugador();
    $jugador->setJugador($_POST['jugadores']);
    $jugador->partidaUno();
}