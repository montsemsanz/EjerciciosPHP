<?php

     include "cabecera.php";

     require_once 'utilidades.php';
     verArray($_POST);

     // a completar
     $resultado = "<h3>Datos introducidos por el usuario</h3>";
     $nombre = $_POST['nombre'];
     $apellido = $_POST['apellido'];
     $dia = $_POST['dia'];
     $mes = $_POST['mes'];
     $anio = $_POST['anio'];
     $resultado .= "<p>Nombre y apellidos: " . strtoupper(substr($nombre, 0, 1)) .
             ". " . strtoupper($apellido) . "</p>";
     $resultado .= "<p>Fecha nacimiento: " . $dia . " / " . $mes . " / " . $anio . "</p>";
     if (isset($_POST['situacion']))
     {
         $resultado .= "<p>Situación laboral: {$_POST['situacion']} </p>";
     }
     else
     {
         $resultado .= "<p>No ha seleccionado su situaci&oacute;n laboral </p>";
     }
     if (isset($_POST['perfil']))
     {
         $perfiles = $_POST['perfil'];
         $resultado .= "<p>Perfil profesional: ";
         foreach ($perfiles as $p)
         {
             $resultado .= " " . $p;
         }
         $resultado .= "</p>";
     }
     else
     {
         $resultado .= "<p>No ha seleccionado su perfil profesional </p>";
     }
     $formacion = $_POST['nivel'];
     $resultado .= "<p>Nivel de estudios:" . strtoupper($_POST['nivel']) . "</p>";
     if (isset($_POST['idiomas']))
     {
         $idiomas = $_POST['idiomas'];
         $resultado .= "<p>Idiomas que conoce: ";
         foreach ($idiomas as $idioma)
         {
             $resultado .= " " . $idioma;
         }
         $resultado .= "</p>";
     }
     else
     {
         $resultado .= "<p>No ha seleccionado ning&uacute;n idioma </p>";
     }
     echo "<div class = 'resultado'>$resultado</div>";

     include "pie.php";
?>
