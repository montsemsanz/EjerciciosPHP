<?php

      define('PI', 3.1416);
      define('INTERES', 5);

      function saludar()
      {
          echo "Hola, esto es un saludo sin parámetros";
      }

      function saludarPersonalizado($nombre)
      {
          echo " Hola $nombre, cómo estás?";
      }

      function areaCirculo($radio)
      {
          $area = PI * $radio * $radio;
          return $area;
      }

      function calcularCantidad($cantidad, $años)
      {
          $nueva = $cantidad;
          for ($a = 1; $a <= $años; $a++) {
              $nueva += $nueva * INTERES / 100;
          }
          return $nueva;
      }

      function sumar($numero1, $numero2)
      {
          $suma = $numero1 + $numero2;
          return $suma;
      }

      function restar($numero1, $numero2)
      {
          $resta = $numero1 - $numero2;
          return $resta;
      }

      function multiplicar($numero1, $numero2)
      {
          $producto = $numero1 * $numero2;
          return $producto;
      }

      function cuadrado($numero1)
      {
          return $numero1 * $numero1;
      }

      /**
       * Función que muestra una línea horizontal
       */
      function lineaHorizontal()
      {
          echo "<hr />";
      }

      /**
       * Función que calcula y devuelve el precio final 
       * una vez aplicado el descuento  
       * 
       */
      function calcularPrecioFinal($precio, $descuento)
      {
          return $precio - $descuento * $precio / 100;
      }

      /**
       * Función que devuelve el nombre del día correspondiente
       * al día pasado como parámetro
       */
      function diaSemana($dia)
      {
          if ($dia == 1) {
              return "Lunes";
          }
          if ($dia == 2) {
              return "Martes";
          }
          if ($dia == 3) {
              return "Miércoles";
          }
          if ($dia == 4) {
              return "Jueves";
          }
          if ($dia == 5) {
              return "Viernes";
          }
          if ($dia == 6) {
              return "S&aacute;bado";
          }
          if ($dia == 7) {
              return "Domingo";
          }
          return "Incorrecto";
      }

      /**
       * Funci�n que calcula y devuelve el total de segundos dada
       * hora y minutos
       */
      function totalSegundos($horas, $minutos)
      {
          return $horas * 3600 + $minutos * 60;
      }

      /**
       * devuelve el nombre de un género de película correspondiente
       * al parámetro
       */
      function nombreGenero($genero)
      {
          switch ($genero) {
              case "TER": $nombre = "TERROR";
                  break;
              case "COM": $nombre = "COMEDIA";
                  break;
              case "FIC": $nombre = "CIENCIA FICCI&Oacute;N";
                  break;
              case "DRA": $nombre = "DRAMA";
                  break;
              case "ROM": $nombre = "ROM&Aacute;NTICA";
                  break;
          }
          return $nombre;
      }
      