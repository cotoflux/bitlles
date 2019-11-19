<?php
    include '../vendor/autoload.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jugar a Bitlles</title>

    </head>
    <body>
        
        <h1>Que divertit jugar a bitlles</h1>

        <form action="Jugador.php" method="post">
            <select name="jugadores">
                <option value="yoda">Yoda</option>
                <option value="vader">Vader</option>
            </select>
            <button type="submit">Enviar</button>

        </form>
        

        
        <?php
        

        ?>
    </body>
</html>
