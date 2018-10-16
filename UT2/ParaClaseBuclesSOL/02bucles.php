<?php

        include "cabecera.php";
        define("ALUMNOS", 15);

        echo "<h4>Simulando notas de un clase y contando aprobados</h4>";

        $aprobados = 0; // contador de aprobados
        for ($i = 1; $i <= ALUMNOS; $i++)
        {
            $nota = rand(1, 10);
            if ($nota >= 5)
            {
                $aprobados++;
            }
        }

        echo "<p>Total aprobados $aprobados</p>";

        include "pie.php";
?>
