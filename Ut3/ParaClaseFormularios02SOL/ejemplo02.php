<?php

    
    require_once 'utilidades.php';
    
    //verArray($_POST);
    if (isset($_POST['enviar']))
    {
        // procesar formulario y mostrar la vista resultados
         $nombre = $_POST['nombre'];
         $resultado = "Tu nombre es $nombre <br />Tus aficiones son: ";
         if (isset($_POST['cine']))
         {
             $resultado .= $_POST['cine']." ";
         }
         if (isset($_POST['lectura']))
         {
             $resultado .= $_POST['lectura']." ";
         }
         if (isset($_POST['deporte']))
         {
             $resultado .= $_POST['deporte']." ";
         }
         if (isset($_POST['baile']))
         {
             $resultado = $_POST['baile'];
         }
         include "resultado.php";
         exit();
    }
    include "vista02.php";
    
?>
