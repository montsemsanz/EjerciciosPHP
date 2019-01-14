<?php
      // primero sin validar y luego añadir validaciones de todo tipo
      require_once 'funciones.php';

      if (isset($_GET['calcular'])) {
          //verArray($_GET);
          $numero1 = trim($_GET['numero1']);
          $numero2 = trim($_GET['numero2']);

          $errores = validar($numero1, $numero2);
          if (!isset($_GET['oper'])) {
              $errores['oper'] = 'Seleccione operaci&oacute;n';
          }
          else {
              $op = trim($_GET['oper']);
              if ($op == "division" && $numero2 == 0) {
                  $errores['numero2'] = 'Teclee valor distinto de 0';
              }
          }
          if (!empty($errores)) {
              include "form_calculadora_2.php";
              exit;
          }

          $calculo = calcular($numero1, $numero2, $op);
          $mensaje = obtener_mensaje($op);
          $resultado = "Valor 1 = " . htmlspecialchars($numero1) .
                  "<br />Valor 2 = " . htmlspecialchars($numero2) .
                  "<br />$mensaje = " . $calculo;
          include "form_calculadora_2.php";
          exit();
      }
      //   $op = "suma";
      include "form_calculadora_2.php";
?>
