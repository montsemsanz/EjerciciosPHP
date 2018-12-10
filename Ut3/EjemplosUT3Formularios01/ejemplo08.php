<?php
    include "cabecera.php";
    
    require_once 'utilidades.php';
    require_once 'utilidades.php';
    verArray($_POST);

     
     $nombre = $_POST['nombre'];
     $edad = $_POST['edad'];
     switch ($edad)
     {
         case "uno": $ed = "entre 1 y 18";
             break;
         case "dos": $ed = "entre 18 y 65";
             break;
         case "tres": $ed = "más de 65";
             break;
     }
     echo "Hola Te llamas $nombre y tienes $ed a&ntilde;os";
     include "pie.php";     
    
    
?>
