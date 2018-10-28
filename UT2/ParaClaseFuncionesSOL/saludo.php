<?php
      include "includes/cabecera.php";
      require_once 'funciones.php';


      echo "<p>Primer saludo </p>\n";
      echo "<p>";
      saludar();
      echo "</p>\n";

      echo "<p>Segundo saludo </p>\n";
      echo "<p>";
      saludar();
      echo "</p>\n";


      echo "<p>Tercer saludo </p>\n";
      echo "<p>";
      saludarPersonalizado("Luis");
      echo "</p>\n";

      // hacemos un bucle para saludar 7 veces
      $i = 1;
      while ($i <= 7) {
          echo "<p>";
          echo "Saludo$i ";
          saludar();
          echo "</p>\n";
          $i++;
      }
      include "includes/pie.php";
?>
