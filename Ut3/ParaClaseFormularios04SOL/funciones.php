<?php

      // muestra un array 
      function verArray($array)
      {
          echo "<pre>";
          print_r($array);
          echo "</pre>";
      }

      // Efectúa la operación indicada en $op sobre los
      // operandos $numero1 y $numero2 y devuelve el resultado
      function calcular($numero1, $numero2, $op)
      {
          switch ($op) {
              case "suma":
                  return $numero1 + $numero2;
                  break;
              case "resta":
                  return $numero1 - $numero2;
                  break;
              case "producto":
                  return $numero1 * $numero2;
                  break;
              default:
                  return number_format($numero1 / $numero2, 2);
                  break;
          }
      }

      // Dada una operación descrita por $op
      // devuelve un mensaje descriptivo de dicha operación
      function obtener_mensaje($op)
      {
          if ($op == "suma") {
              return "La suma es ";
          }
          if ($op == "resta") {
              return "La resta es ";
          }
          if ($op == "producto") {
              return "El producto es ";
          }
          return "La divisi&oacute;n es ";
      }

      // dados dos operandos los valida y devuelve un array $errores
      function validar($numero1, $numero2)
      {
          $errores = [];
          if (empty($numero1) && $numero1 == '') {
              $errores['numero1'] = "Introduzca un n&uacute;mero";
          }
          else if (!is_numeric($numero1)) {
              $errores['numero1'] = "Introduzca un valor num&eacute;rico";
          }
          if (empty($numero2) && $numero2 == '') {
              $errores['numero2'] = "Introduzca un n&uacute;mero";
          }
          else if (!is_numeric($numero2)) {
              $errores['numero2'] = "Introduzca un valor num&eacute;rico";
          }

          return $errores;
      }

      // permite mantener activado el valor de un botón de radio
      function verificarBotones($grupo, $valor)
      {
          if ($grupo == $valor) {
              echo 'checked = "checked"';
          }
      }

      // permite mantener activada el valor de una casilla de verificación
      function verificarCasillas($array, $valor)
      {
          if (in_array($valor, $array)) {
              echo 'checked = "checked"';
          }
      }

      // permite mantener activado el valor en una lista desplegable
      function verificarLista($grupo, $valor)
      {
          if ($grupo == $valor) {

              echo '  selected = "selected"';
          }
      }

      function verificarListaMultiple($array, $valor)
      {
          if (in_array($valor, $array)) {

              echo '  selected = "selected"';
          }
      }
?>
