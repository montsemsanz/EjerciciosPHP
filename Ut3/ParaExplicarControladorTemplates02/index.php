<?php
//    echo "<pre>";
//    print_r($_GET);
//    echo "</pre>";
    // el controlador
    if ( !isset($_GET['saludar'])) //  no se ha enviado el formulario
    {
        // se muestra la vista del formulario (la plantilla form_bienvenida.php)
        include "form_bienvenida.php";
        exit();
    }
    
    // el formulario ya se ha enviado
    // se recogen y procesan los datos
    // y se muestra la plantilla del resultado (la vista resultado.,php)
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $resultado = "Bienvenido/a $nombre $apellido ";
    include "form_bienvenida.php";
     
         
?>
