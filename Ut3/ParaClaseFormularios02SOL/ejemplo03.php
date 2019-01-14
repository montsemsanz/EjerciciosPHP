<?php
    require_once 'utilidades.php';
    //verArray($_POST);
    if (isset($_POST['enviar']))
    {
        // procesar formulario y mostrar la vista resultados
         $nombre = $_POST['nombre'];
         $resultado = "Tu nombre es $nombre <br />Tu afición es: {$_POST['aficiones']}";
         
         include "resultado.php";
         exit();
    }
    include "vista03.php";
    
?>
