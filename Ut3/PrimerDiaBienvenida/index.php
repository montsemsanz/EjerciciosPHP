<?php
    require_once "libreria/funciones.php";
    // Aquí se concentra la lógica de toda la aplicación
    if (!isset($_POST["enviar"])) // no se ha enviado el formulario                      
    {
        include "vistas/bienvenida.php";
        exit();
    }
 // se ha enviado, hay que procesarlo
        $nombre = htmlspecialchars(trim($_POST["nombre"]), ENT_QUOTES, 'UTF-8');
        $apellido = htmlspecialchars(trim($_POST["apellido"]), ENT_QUOTES, 'UTF-8');
        $errores = validar_formulario($nombre, $apellido); // Aquí generamos los distintos mensajes de error
        if (!empty ($errores)) //   hay errores
        {
            include "vistas/bienvenida.php"; // mostramos el formulario con los errores
            exit();
        }
        $salida = "Bienvenido/a ".$nombre." ".$apellido;
                  
        include "vistas/bienvenida.php";
        
        
    
 
?>
