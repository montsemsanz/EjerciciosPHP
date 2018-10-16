<?php
        include "cabecera.php";
        
        echo "<h3>Calcular nota media de 8 alumnos en 6 módulos</h3>";
        
        echo "<table><caption>Notas alumnos</caption>\n";
        echo "<tr><td class='verde'>Alumno</td><td class='verde'>Nota media</td></tr>\n";
        for ($fila = 1; $fila <= 8; $fila++)
        {
            echo "<tr>";
            $suma = 0;
            for ($columna = 1; $columna <= 6; $columna++)
            {
                $suma += rand(1, 10);                
            }
            $media = $suma / 6;
            echo "<td>$fila</td><td>".number_format($media, 2)."</td></tr>\n";
        }
        echo "</table>";
        
        include "pie.php"
?>
