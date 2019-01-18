<?php
      require_once 'funciones.php';
      // verArray($_POST);
      if (!isset($_POST['enviar'])) { // no se ha enviado el formulario, es la priemra petición al controlador
          include "vista_formulario.php";
          exit();
      }
      // se ha enviado ya el formulario (2ª petición y siguientes)
      // recogemos todos los datos y los filtramos
      $nombre = trim($_POST['nombre']);
      $hijos = trim($_POST['hijos']);
      $errores = [];
      if (empty($nombre)) {
          $errores['nombre'] = 'Introduzca nombre';
      }
      if (empty($hijos) && $hijos != '0') { // $hijos != '0'
          $errores['hijos'] = 'Introduzca hijos';
      }
      else if (!is_numeric($hijos)) {
          $errores['hijos'] = 'Introduzca un valor num&eacute;rico';
      }
      else if ($hijos < 0) {
          $errores['hijos'] = 'Introduzca un valor positivo';
      }
      else if ($hijos > 50) {
          $errores['hijos'] = 'Introduzca un valor no mayor de 50';
      }
      if (!isset($_POST['sexo'])) {
          $errores['sexo'] = "Elija sexo";
      }
      else {
          $sexo = trim($_POST['sexo']);
      }
      $provincia = trim($_POST['provincia']);

      $dia = trim($_POST['dia']);
      $mes = trim($_POST['mes']);
      $anio = trim($_POST['anio']);

      if (!isset($_POST['temas'])) {
          $errores['temas'] = "Seleccione sus temas de inter&eacute;s";
      }
      else {
          $temas = $_POST['temas']; // no podemos hacer aquí trim porque es  un array
      }
      if (!empty($errores)) { // hay errores
          include "vista_formulario.php";
          exit();
      }
      $resultado = "Sus datos personales <br/>";
      $resultado .= "Nombre: " . htmlspecialchars(strtoupper($nombre)) . " <br />";
      $resultado .= "Hijos: " . htmlspecialchars($hijos) . " <br />";
      $resultado .= "Sexo: " . strtoupper(htmlspecialchars($sexo)) . " <br />";
      $resultado .= "Provincia: " . strtoupper(htmlspecialchars($provincia)) . " <br />";
      $nombreMes = nombreDeMes($mes);
      $resultado .= "Fecha de nacimiento: " . htmlspecialchars($dia) . " / " .
              htmlspecialchars($nombreMes) . " / " . htmlspecialchars($anio) . " <br />";
      $resultado .= "Sus temas de inter&eacute;s: ";
      foreach ($temas as $tema) {
          $resultado .= htmlspecialchars(trim(strtoupper($tema))) . "  ";
          // filtramos aquí justo antes de enviar cada tema al navegador del usuario
      }
      include "vista_formulario.php";
?>