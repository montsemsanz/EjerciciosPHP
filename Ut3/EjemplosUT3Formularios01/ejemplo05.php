<?php

         include "cabecera.php";
         
         require_once 'utilidades.php';
         verArray($_POST);
         
         $nombre = $_POST['nombre'];
         $edad = $_POST['edad'];
         echo "Hola Te llamas $nombre y tienes $edad a&ntilde;os";
         include "pie.php";
?>
