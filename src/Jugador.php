
<?php

require 'Bitlles.php';
require 'Ronda.php';

class Jugador {
    public $jugador;
    public $TotalVader = 0;
    public $TotalYoda = 0;

function partida(){
    
    $this->jugador = getElementByName($jugadores);

    if ($this->jugador == 'Vader'){
        $partida1 = new Ronda();
        $partida1 = primeraTirada();
        $this->TotalVader += $partida1;
        
        $partida2 = new Ronda();
        $partida2= segonaTirada();
        $this->partidaTotalVader += $partida2;
    }
    
    if ($jugador == 'Yoda'){
        $partida1 = new Ronda();
        $partida1 = primeraTirada();
        $this->TotalYoda += $partida1;
        
        $partida2 = new Ronda();
        $partida2= segonaTirada();
        $this->TotalYoda += $partida2;
    }

}
}