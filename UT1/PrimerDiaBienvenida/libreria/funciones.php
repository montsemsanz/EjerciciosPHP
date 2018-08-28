<?php
    function validar_formulario($nombre, $apellido) 
    {
        $errores = array();
        if (empty($nombre))
        {
             $errores["nombre"] = "Introduzca nombre";
        }
               
        if (empty($apellido))
        {
            $errores["apellido"] = "Introduzca apellido";
        }
                
       return $errores;
                
    }
 
?>
