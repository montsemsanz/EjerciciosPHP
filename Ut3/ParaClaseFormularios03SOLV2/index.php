<?php

    
    require_once 'utilidades.php';
 
   // verArray($_POST);
    if (isset($_POST['enviar']))
    {
        // procesar formulario y mostrar la vista resultados
         $nombre = $_POST['nombre'];
         $apellido = $_POST['apellido'];
         $modulo =  $_POST['modulo'];
         switch ($modulo)
         {
             case "bd": $modulo = 'Bases de datos';
                         break;
             case "aweb": $modulo = 'Implantación de aplicaciones web';
                         break;
             case "seg": $modulo = 'Seguridad';
                         break;
             case "so": $modulo = 'Sistemas operativos';
                         brek;
         }
         $nota =  $_POST['nota'];
         $resultado = "Nombre: $nombre $apellido<br />Módulo: $modulo <br />Nota: $nota";
         
         include "form_alumno.php";
         exit();
    }
    include "form_alumno.php";
    
    
?>
