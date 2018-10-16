<?php
      include "cabecera.php";
      // bucles anidados


      echo "<h3>Generando nºs aleatorios hasta el 0</h3>\n";

      $aleatorio = rand(0, 9);
      while ($aleatorio != 0)
      {
          echo "<p>$aleatorio - ";
          if ($aleatorio % 2 == 0) // es par
          {
              for ($i = 1; $i <= $aleatorio; $i++)
              {
                  echo "X ";
              }
          }
          else // es impar
          {
              for ($i = $aleatorio; $i >= 1; $i--)
              {
                  echo $i . " ";
              }
          }

          echo "</p>\n";
          $aleatorio = rand(0, 9);
      }
 
      include "pie.php";
?>
