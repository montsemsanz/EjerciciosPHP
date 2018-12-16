<?php
      
      if (isset($_POST['enviar'])) //  se ha enviado el formulario
      {
          $nombre = trim($_POST['nombre']);
          $modulo = trim($_POST['modulo']); // siempre se transmite 
          $nota = trim($_POST['nota']); // siempre se transmite 

          $errores = array();
          if (empty($nombre))
          {
              $errores['nombre'] = 'Introduzca el nombre';
          }
          if ( ! isset($_POST['curso']))
          {
              $errores['curso'] = 'Seleccione curso';
          }
          else
          {
              $curso = trim($_POST['curso']);
          }
          if ( ! isset($_POST['idioma']))
          {
              $errores['idioma'] = 'Seleccione idioma';
          }
          else
          {
              $idioma = $_POST['idioma'];
          }

          if (empty($errores))         // no ha habido ningun error
          {
              $resultado = "<p>Bienvenido/a " . htmlspecialchars(strtoupper($nombre)) . "  </p> ";
              $resultado .= "<p>Has introducido los siguientes datos </p> ";
              $resultado .= "<p>M&oacute;dulo " . htmlspecialchars(strtoupper($modulo)) . " </p> ";
              $resultado .= "<p>Nota $nota</p> ";
              $resultado .= "<p>Curso " . htmlspecialchars(strtoupper($curso)) . " </p> ";
              $resultado .= "<p>Idiomas: ";
              foreach ($idioma as $i)
                  $resultado .= htmlspecialchars(strtoupper(trim($i))) . "  ";
              $resultado .= "</p>";
              include "formulario.php";
              exit();
          }


          include "formulario.php";
          exit();
      }

      // el formulario no se ha enviado
     

      include "formulario.php";
?>
