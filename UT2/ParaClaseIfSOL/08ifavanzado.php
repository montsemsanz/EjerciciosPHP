<?php

      include "cabecera.php";

      $hora = rand(0, 23);
      $minutos = rand(0, 59);
      $segundos = rand(0, 59);
      echo "<h3>Antes de avanzar un segundo </h3>";
      echo "<h2>$hora:$minutos:$segundos</h2>";
      $segundos++;
      if ($segundos == 60)
      {
          $segundos = 0;
          $minutos++;
          if ($minutos == 0)
          {
              $minutos = 0;
              $horas++;
              if ($horas == 0)
              {
                  $horas = 0;
              }
          }
      }
      echo "<h3>Despu&eacute;s de avanzar un segundo </h3>";
      echo "<h2>$hora:$minutos:$segundos</h2>";
      $resul = "";
      if ($hora < 10)
      {
          $resul = $resul . "0";
      }
      $resul = $resul . $hora . ":";
      if ($minutos < 10)
      {
          $resul = $resul . "0";
      }
      $resul = $resul . $minutos . ":";
      if ($segundos < 10)
      {
          $resul = $resul . "0";
      }
      $resul = $resul . $segundos;
      echo "<hr />";
      echo "<h3>Escribimos con formato mejorado </h3>\n";
      echo "<h2>$resul</h2>\n";


      echo "<h3>Escribimos con formato mejorado usando <span class='aviso'>strtotime() "
      . "</span>y <span class='aviso'>date()</span></h3>\n";
      $strHora = "$hora:$minutos:$segundos";
      $hora = strtotime($strHora);
      $horaFormateada = date("H:i:s", $hora);
      echo "<h2>$horaFormateada</h2>\n";


      include "pie.php";
?>
