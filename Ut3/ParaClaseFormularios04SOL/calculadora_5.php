<?php
      require_once 'funciones.php';
      if (isset($_GET['calcular'])) {
          $numero1 = trim($_GET['numero1']);
          $numero2 = trim($_GET['numero2']);
          $errores = validar($numero1, $numero2);
          if (!isset($_GET['oper'])) {
              $errores['oper'] = "Seleccione operaci&oacute;n";
          }
          else {
              $oper = $_GET['oper'];
              if ($numero2 == '0' && in_array("division", $oper)) {
                  $errores['numero2'] = 'Teclee valor distinto de 0';
              }
          }


          if (!empty($errores)) {
              include "form_calculadora_5.php";
              exit();
          }


          $resultado = "";
          foreach ($oper as $op) {
              $calculo = calcular($numero1, $numero2, $op);
              $mensaje = obtener_mensaje($op);
              $resultado .= "<br />Valor 1 = " . htmlspecialchars($numero1) .
                      "<br />Valor 2 = " . htmlspecialchars($numero2) .
                      "<br />$mensaje = " . $calculo;
          }


          include "form_calculadora_5.php";
          exit();
      }
      // inicialmente no se muestra ninguna casilla activada     
      include "form_calculadora_5.php";
?>
