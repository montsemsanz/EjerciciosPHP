<?php

      include "cabecera.php";
      require_once 'utilidades.php';
      verArray($_GET);
      $nombre = $_GET['nombre'];
      $edad = $_GET['edad'];
      echo "Hola Te llamas $nombre y tienes $edad a&ntilde;os";

      include "pie.php";
?>
