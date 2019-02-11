<?php
     // conexión al servidor
     $conexion = mysqli_connect("localhost", "pepe", "pepa");
     if (!$conexion) // $conexion == false
     {
          $error = "Imposible establecer conexión con el servidor de la BD";
         //$error = mysqli_error($conexion);
         include "error.php";
         exit();
     }
     //echo "Conexión establecida";
     // seleccionar la BD 
     $bd = 'bdpeliculas';
     $resul = mysqli_select_db($conexion, $bd);
     if (!$resul)
     {
          $error = "Imposible localizar la base de datos $bd";
      //    $error = mysqli_error($conexion);
         include "error.php";
         exit();
     }
      
?>
