<?php

      require_once 'utilidades.php';

      if (!isset($_POST['saludar'])) //  no se ha enviado el formulario
      {
          // se muestra la vista del formulario (la plantilla form_bienvenida.php)
          include "form_bienvenida.php";
          exit();
      }

      // el formulario ya se ha enviado
      // se recogen, validan y  procesan los datos
      // si hay errores se vuelve a mostrar el formulario inicial
      // si no hay errores se muestra el formulario   

      $nombre = trim($_POST['nombre']);
      $apellido = trim($_POST['apellido']);
      $edad = trim($_POST['edad']);

      $errores = [];  // aquí guardamos los mensajes de error que mostraremos al usuario
      if (empty($nombre))
      {
          $errores['nombre'] = 'Introduzca el nombre';
      }
      if (empty($apellido))
      {
          $errores['apellido'] = 'Introduzca el apellido';
      }
      if (empty($edad))
      {
          $errores['edad'] = 'Introduzca la edad';
      }
      else if (!is_numeric($edad))
      {
          $errores['edad'] = 'Introduzca un valor num&eacute;rico';
      }
      else if ($edad <= 0)
      {
          $errores['edad'] = 'Introduzca un valor positivo';
      }
      // verArray($errores);

      if (empty($errores))         // no ha habido ningun error
      {
          //echo "sin errores";
          $resultado = "Bienvenido/a " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido);
          $resultado .= "tienes " . htmlspecialchars($edad) . " &ntilde;os";
          include "form_bienvenida.php";
          exit();
      }

      // ha habido errores, se muestra el formulario con los errores
      include "form_bienvenida.php";
?>
