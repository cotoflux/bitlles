
require (Bitlles.php);
require (Ronda.php);

<?php

$primero = Yoda;
$segundo = Vader;
$TotalVader = 0;
$TotalYoda = 0;

function partida(){
    
    $jugador = getElementByName(jugadores);
    if ($jugador == Vader){
        $partida1 = new Ronda();
        $partida1 = primeraTirada();
        $TotalVader += $partida1;
        
        $partida2 = new Ronda();
        $partida2= segonaTirada();
        $TotalVader += $partida2;
    }
    
        if ($jugador == Yoda){
        $partida1 = new Ronda();
        $partida1 = primeraTirada();
        $TotalYoda += $partida1;
        
        $partida2 = new Ronda();
        $partida2= segonaTirada();
        $TotalYoda += $partida2;
    }
   
};

    


?>
