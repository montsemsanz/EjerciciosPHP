<?php
    include "cabecera.php";

    require_once 'utilidades.php';
    verArray($_POST);

    $nombre = $_POST['nombre'];
    $resultado = "Tu nombre es $nombre <br />Tus aficiones son: ";
    if (!isset($_POST['aficiones']))
    {
        echo "No has seleccionado ninguna afici&oacute;n";
    }
    else
    {
        $aficiones = $_POST['aficiones'];
        $resultado .= "Tus aficiones son: ";
        foreach ($aficiones as $aficion)
        {
            $resultado .= $aficion."  ";
        }
        
        echo $resultado;
    }
    
    

    include "pie.php";
?>
