<?php

      require_once 'funciones.php';
      include "includes/cabecera.php";
      $paises = ["Italia" => "Roma", "Francia" => "Par&iacute;s",
          "Alemania" => "Berl&iacute;n", "Grecia" => "Atenas",
          "Irlanda" => "Dubl&iacute;n", "Portugal" => "Lisboa", "Espa&ntilde;a" => "Madrid",
          "Austria" => "Viena"];
      verArray($paises);
      // ordenados por clave en ascendente
      echo "<h3>Ordenados por clave</h3>";
      ksort($paises);
      verArray($paises);
      // ordenados por valores descendentemente
      echo "<h3>Ordenados por valores en orden descendente </h3>";
      arsort($paises);
      verArray($paises);
      //  Comprobar si está el país Italia
      if (array_key_exists("Italia", $paises))
      {
          echo "<h4>Italia se encuentra entre los países</h4>";
      }
      else
      {
          echo "<h4>Italia  no se encuentra entre los países</h4>";
      }

      // Obtener todos los pa�ses (las claves)
      $losPaises = array_keys($paises);
      echo "<h4>Países  </h4>";
      verArray($losPaises);
      // Obtener todas las capitales (las capitales)
      $lasCapitales = array_values($paises);
      echo "<h4>Capitales de la UE</h4>";
      verArray($lasCapitales);
      // dada una capital (un valor) obtener su país (la clave)
      $capital = "Madrid"; // sensible a mayúsculas / minúsculas
      $pais = array_search($capital, $paises);
      echo "<h4>País: $pais  Capital: $capital</h4>";

      include "includes/pie.php";
?>
