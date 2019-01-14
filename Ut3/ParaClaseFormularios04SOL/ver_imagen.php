<?php
      // primero sin validar y luego añadir validaciones de todo tipo
      if (isset($_GET['ver'])) {
          $numero = trim($_GET['numero']);
          if (empty($numero) && $numero != '0') { // $numero == ""
              $errores['numero'] = 'Introduzca un n&uacute;mero';
          }
          else if (!is_numeric($numero)) {
              $errores['numero'] = 'Introduzca un valor num&eacute;rico';
          }
          else if ($numero <= 0 || $numero > 6) {
              $errores['numero'] = 'Introduzca un valor num&eacute;rico entre 1 y 6';
          }
          if (!empty($errores)) {
              include "form_imagen.php";
              exit();
          }
          $imagen = "images/" . $numero . ".gif";
          $resultado = "<img  src=\"$imagen \" alt = 'Imagen no disponible' />";
          include "form_imagen.php";
          exit();
      }
      include "form_imagen.php";
?>
