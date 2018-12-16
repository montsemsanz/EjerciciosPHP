<?php

      function verArray($array)
      {
          echo "<pre>";
          print_r($array);
          echo "</pre>";
      }

      function verificarCasillas($array, $valor)
      {
          if (in_array($valor, $array))
          {
              echo 'checked = "checked"';
          }
      }

      function verificarBotones($grupo, $valor)
      {
          if ($grupo == $valor)
          {
              echo 'checked = "checked"';
          }
      }

      function verificarLista($grupo, $valor)
      {
          if ($grupo == $valor)
          {

              echo '  selected = "selected"';
          }
      }
?>
