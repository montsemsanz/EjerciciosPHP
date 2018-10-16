<?php
        include "cabecera.php";
        $precio = 16; // precio de un libro
        $cantidad = 0;
        $total = 0;

        while ($total < 250)
        {
            $cantidad++;
            $total += $precio;
            print "Libro ".$cantidad. " : " . $total . "<br/>";
        }

        print "<p>Por 250&#x20AC; , se pueden comprar  " . ($cantidad - 1) . "  libros</p>";



        include "pie.php";
?>
