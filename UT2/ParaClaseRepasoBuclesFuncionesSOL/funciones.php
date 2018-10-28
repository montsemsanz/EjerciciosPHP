<?php

      // calcula y devuelve el producto mediante sumas
      function producto($numero1, $numero2)
      {
          $produc = 0;
          for ($i = 1; $i <= $numero2; $i++)
          {
              $produc = $produc + $numero1;
          }
          return $produc;
      }
      
       // calcula y devuelve la potencia
      function potencia($numero1, $numero2)
      {
          $poten = 1;
          for ($i = 1; $i <= $numero2; $i++)
          {
              $poten  = $poten * $numero1;
          }

          return $poten;
      }
      