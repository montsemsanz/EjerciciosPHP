<?php

        require_once 'funciones.php';
        include "includes/cabecera.php";
        $equipo = ["jugador1"=>["nombre"=>"Messi", "sueldo"=>20, "goles"=>18],
                       "jugador2"=>["nombre"=>"Iniesta", "sueldo"=>15, "goles"=>16],
                        "jugador3"=>["nombre"=>"Neymar", "sueldo"=>17, "goles"=>14],
                        "jugador4"=>["nombre"=>"Puyol", "sueldo"=>9, "goles"=>6]];
        
        verArray($equipo);
        
        // mostrar los datos de "jugador2"
        echo "<div class='jugador'>";
        foreach ($equipo['jugador2'] as $key=>$valor)
        {
            echo "<p>$key: $valor</p>";
        }
        echo "</div>\n";
        
        // Mostrar el sueldo de Neymar
         echo "<h4>El sueldo de Neymar es : {$equipo['jugador3']['sueldo']} millones de &euro;</h4>\n";
        // calcular el total de goles entre todos los jugadores
        $suma = 0;
        foreach ($equipo as $jugador)
        {
            $suma = $suma + $jugador['goles'];
        }
        echo "<h4>Total goles : $suma</h4>\n";
        // media sueldo de los jugadores formateado a dos decimales
        $suma = 0;
        foreach ($equipo as $jugador)
        {
            $suma = $suma + $jugador['sueldo'];
        }
        $media = $suma / count($equipo);
        echo "<h4>Media sueldo : ".number_format($media, 2)." millones de &euro;</h4>\n";
        // mostrar todo el array como tabla HTML
        echo "<table><caption>Equipo completo</caption><tr><td></td>";
        foreach (array_keys($equipo['jugador1']) as $valor)
        {
            echo "<td>$valor</td>";
        }
        echo "</tr>\n";
        foreach ($equipo as $clave => $jugador)
        {
            echo "<tr>";
            echo "<td>$clave</td>";
            foreach ($jugador as $key => $valor)
            {
                echo "<td>$valor</td>";
            }
            echo "</tr>\n";
        }
        echo "</table>\n";
        include "includes/pie.php";
        
?>

