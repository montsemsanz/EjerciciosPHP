<?php

    
    require_once 'utilidades.php';
    
    //verArray($_POST);
    if (isset($_POST['enviar']))
    {
        // procesar formulario y mostrar la vista resultados
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
         $resultado =  "Hola Te llamas $nombre y tienes $ed años";
         include "resultado.php";
         exit();
    }
    include "vista01.php";
    
?>
