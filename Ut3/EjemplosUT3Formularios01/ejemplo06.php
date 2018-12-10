<?php
     
    include "cabecera.php";

    require_once 'utilidades.php';
    verArray($_POST);
    $nombre = $_POST['nombre'];
    $texto = $_POST['texto'];
    echo "Tu nombre es $nombre <br />Tu comentario: $texto";

    include "pie.php";
    
?>
