<?php
     require_once 'funciones.php';
     include "includes/cabecera.php";
     
     $alumnos = ["Ana", "Pedro", "Luis", "Esteban", "Maite", "Isabel"];
     verArray($alumnos);
     $alumnos[] =  'Juan Luis';
     
     verArray($alumnos);
     echo "Total alumnos en clase ".count($alumnos)."<br />";
     
     foreach ($alumnos as $al)
     {
         echo "$al  ";
     }
     echo "<hr />";
     // mostrar el alumno de posición 3
     echo $alumnos[3]; // que prueben con un índice que no existe y vean el error producido
     
     // array asociativo, alumnos y notas
     $alumnos = ["Ana" => 5, "Pedro" => 4, "Luis" => 7, "Esteban" => 8, "Maite" => 5, "Isabel" => 4.5];
     verArray($alumnos);
     foreach ($alumnos as $al => $nota)
     {
         echo "$al - $nota <br /> ";
     }
     // calcular el total de aprobados en el curso
     $aprobados = 0;
     foreach ($alumnos as $al => $nota)
     {
         if ($nota >= 5)
         {
             $aprobados++;
         }
     }
     echo "Total aprobados ".$aprobados."<br />";
     // calcular la nota media
     $sumaNotas = 0;
     foreach ($alumnos as $al => $nota)
     {
          $sumaNotas += $nota;
     }
     $media = $sumaNotas / count($alumnos);
     echo "Nota media del curso ".number_format($media, 2)."<br />";
     
     echo "<hr />";
     // Mostrar los nombres en orden descendente - ordenar las claves
     
     echo "<h4>Ordenado descendente de nombre (las claves)</h4>";
     krsort($alumnos);
     foreach ($alumnos as $al => $nota)
     {
         echo "$al - $nota <br /> ";
     }
      echo "<hr />";
      // Mostrar los nombres y notas en orden ascendente de nota  - ordenar lasos valores
      echo "<h4>Ordenado ascendente seg&uacute;n las notas (los valores)</h4>";
     asort($alumnos);
     foreach ($alumnos as $al => $nota)
     {
         echo "$al - $nota <br /> ";
     }
     
     include "includes/pie.php";
?>
