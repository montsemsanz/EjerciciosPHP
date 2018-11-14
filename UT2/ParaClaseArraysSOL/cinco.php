<?php

        require_once 'funciones.php';
        include "includes/cabecera.php";

        $notas = ["PEDRO" => ["AWEB" => 6, "SEAD" => 7, "SERI" => 5, "FOL" => 4, "IMSO" => 8],
            "LUIS" => ["AWEB" => 4, "SEAD" => 8, "SERI" => 7, "FOL" => 8, "IMSO" => 9],
            "ANA" => ["AWEB" => 5, "SEAD" => 8, "SERI" => 7, "FOL" => 9, "IMSO" => 5],
            "JORGE" => ["AWEB" => 8, "SEAD" => 9, "SERI" => 7, "FOL" => 6, "IMSO" => 6]];
        echo "<p>JORGE ha tenido en SERI un {$notas["JORGE"]["SERI"]}</p>";
        $notasDeAna = $notas["ANA"];
        $suma = 0;
        foreach ($notasDeAna as $asig => $nota)
        {
            $suma = $suma + $nota;
        }
        echo "<p>Nota media de Ana: " . $suma / count($notasDeAna) . "</p>\n";
        $suma = 0;
        foreach ($notas as $alumno => $notasDeAlumno)
        {
            $suma = $suma + $notasDeAlumno["SEAD"];
        }

        echo "<p>Nota media de SEAD: " . $suma / count($notas) . "</p>\n";
        $nombresAsignaturas = array_keys($notas["PEDRO"]);
        echo "<table><tr><td></td>";
        foreach ($nombresAsignaturas as $valor)
        {
            echo "<td>$valor</td>";
        }
        echo "</tr>\n";
        foreach ($notas as $alumno => $notasDeAlumno)
        {
            echo "<tr>";
            echo "<td>$alumno</td>";
            foreach ($notasDeAlumno as $key => $valor)
            {
                echo "<td>$valor</td>";
            }
            echo "</tr>\n";
        }
        echo "</table>\n";
        echo "<p></p><p>Nombre completo de  SEAD:  ".nombreCompletoDe("SEAD")."</p>";
        echo "<p>Nombre completo de  SERI:  ".nombreCompletoDe("SERI")."</p>";
        include "includes/pie.php";
?>
