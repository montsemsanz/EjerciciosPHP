<?php
 
    require_once 'utilidades.php';
    //verArray($_POST);
    if (isset($_POST['enviar']))
    {
        // procesar formulario y mostrar la vista resultados
         $nombre = $_POST['nombre'];
         if (isset($_POST['aficiones']))
         {
              $aficiones = $_POST['aficiones'];
              $af = "Aficiones: ";
             foreach ($aficiones as $a)
             {
                 $af .= $a."  ";
             }
         }
         else
         {
             $af = 'No has introducido aficiones';
         }
         
         $resultado = "Tu nombre es $nombre <br />$af";
         
         include "resultado.php";
         exit();
    }
    include "vista04.php";
    
?>
