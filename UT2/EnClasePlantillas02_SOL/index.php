 <?php
      $nombre = 'Ana';
      $salida = "Mi nombre es $nombre y voy a tirar un dado 8 veces y sumar las tiradas<br />";
      $suma = 0;
      $i = 1;
      while ($i <= 8)
      {
          $dado = rand(1, 6);
          $suma += $dado;
          $i++;
      }
      $salida .= "La suma de las tiradas ha sido $suma";
      include "vistas/vista_resultado.php";
?>
