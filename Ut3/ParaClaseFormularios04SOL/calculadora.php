<?php
      require_once 'funciones.php';
      // primero sin validar y luego añadir validaciones de todo tipo
      if (isset($_GET['sumar'])) {
          $numero1 = trim($_GET['numero1']);
          $numero2 = trim($_GET['numero2']);
          $errores = validar($numero1, $numero2);
          if (!empty($errores)) {
              include "form_calculadora.php";
              exit;
          }
          $suma = calcular($numero1, $numero2, 'suma');
          $resultado = "Valor 1 = " . htmlspecialchars($numero1) .
                  "<br />Valor 2 = " . htmlspecialchars($numero2) .
                  "<br />Suma = " . $suma;
          include "form_calculadora.php";
          exit();
      }
      include "form_calculadora.php";
?>
