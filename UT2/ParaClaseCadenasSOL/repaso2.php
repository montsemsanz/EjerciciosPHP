<?php
      require_once "includes/cabecera.php";
      require_once "funciones.php";

      echo contarVocales("A");

      $nombres = ["Ana", "Luis", "Alberto", "Berta", "Elisa", "Juan", "Isabel"];
      echo "<h3>Escribimos cada nombre en may&uacute;sculas y el total de vocales</h3>\n";
      foreach ($nombres as $nombre) {
          echo "<p>" . strtoupper($nombre) . ":" . contarVocales($nombre) . "</p>\n";
      }
      echo "<h3>Sustituimos ahora en los nombres la 'a' por '*'</h3>\n";
      foreach ($nombres as $nombre) {
          echo "<p>" . $nombre . " : " . str_replace('a', '*', $nombre) . "</p>\n";
      }

      echo "<h3>Escribimos una tabla HTML con cada nombre invertido y guionizado</h3>\n";
      echo "<table>\n";
      foreach ($nombres as $nombre) {
          $invertido = strrev($nombre);
          $guionizado = guionizar($nombre);
          echo "<tr><td>" . $invertido . " </td><td>" . $guionizado . "</td></tr>\n";
      }
      echo "</table>\n";
      require_once "includes/pie.php";

      