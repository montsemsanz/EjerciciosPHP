﻿<?php
    // puedo dejar vac�o action = "" o action = "?"
    include "cabecera.php";

    require_once 'utilidades.php';
    verArray($_POST);
    
    $nombre = $_POST['nombre'];      
    echo "Tu nombre es $nombre <br />";
                 
     include "pie.php";
    
?>
