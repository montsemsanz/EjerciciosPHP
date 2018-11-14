<?php

        require_once 'funciones.php';
        include "includes/cabecera.php";
        $numeros = [];
        $n = 1;
        while ($n <= 10)
        {
            $numeros[] = rand(30, 50);
            $n++;
        }
        sort($numeros);
        $pares = 0;
        $sumaImpares = 0;
        echo "<p>";
        foreach ($numeros as $numero)
        {
            echo $numero . "    ";
            if ($numero % 2 == 0)
            {
                $pares++;
            }
            else
            {
                $sumaImpares += $numero;
            }
        }
        echo "</p>";
        echo "<p> Pares: $pares </p>";
        echo "<p> Suma impares: $sumaImpares </p>";

        include "includes/pie.php";
?>

