<?php

      function verArray($unArray)
      {
          echo "<pre>";
          print_r($unArray);
          echo "</pre>";
      }

      function filtrarDato($dato)
      {
          return htmlspecialchars(trim($dato));
      }

?>
