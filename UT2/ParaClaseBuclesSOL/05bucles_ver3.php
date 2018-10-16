<?php
        include "cabecera.php";
        $precio = 16;  // precio de un libro
        $cantidad = 250;  // cantidad disponible para gastar
        $totalLibros = $cantidad / $precio;  // cantidad libros que se pueden comprar
        $contador = 1;
        while ($contador <= $totalLibros)
        { 
            echo "<p>Libro ".$contador. " : " . ($precio * $contador) . "</p>\n";
            $contador++;
        }

        echo "<p>Por 250&#x20AC; , se pueden comprar  " . ($cantidad) . "  libros</p>\n";

        echo "<h3>Lo mismo con for</h3>";
        for ($contador = 1; $contador <= $totalLibros; $contador++)
        {
            echo "<p>Libro ".$contador. " : " . ($precio * $contador) . "</p>\n";
        }

        include "pie.php";
?>
