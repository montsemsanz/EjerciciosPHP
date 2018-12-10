<?php
    include "cabecera.php";
    
    require_once 'utilidades.php';
    verArray($_POST);
     
     $nombre = $_POST['nombre'];
     $resultado = "Tu nombre es $nombre <br />Tu afici&oacute;n es: {$_POST['aficiones']}";
     echo $resultado;
         
    include "pie.php";
    
?>
