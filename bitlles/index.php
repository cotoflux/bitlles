<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
            require(Jugador.php);
        ?>
    </head>
    <body>
        
        <h1>Que divertit jugar a bitlles</h1>
        
        <select name="jugadores">
              <option value="yoda">Yoda</option>
              <option value="vader">Vader</option>
        </select>
        
        <?php
        
        for($i=0; $i<11; $i++){
            if(value == yoda){
                return partida(). "Partida Yoda";
            }
            
            if(value == vader){
                return partida(). "Partida Vader";
            }
        }
        ?>
    </body>
</html>
