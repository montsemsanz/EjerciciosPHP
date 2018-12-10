<?php

      include "cabecera.php";

      require_once 'utilidades.php';
      verArray($_POST);

      // procesar formulario  
      $nombre = $_POST['nombre'];
      if (isset($_POST['aficiones']))
      {
          $aficiones = $_POST['aficiones'];
          $af = "Aficiones: ";
          foreach ($aficiones as $a)
          {
              $af .= $a . "  ";
          }
          $resultado = "Tu nombre es $nombre <br />$af";
      }
      else
      {
          $resultado = "Tu nombre es $nombre y no tienes aficiones <br />";
      }
      echo $resultado;

      include "pie.php";
?>
