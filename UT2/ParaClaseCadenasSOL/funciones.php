<?php

      /**
       * 
       * devuelve true si es vocal el argumento, false en otro caso
       */
      function esVocal($letra)
      {
          return strpos("AEIOUaeiou", $letra);
      }

      /**
       * 
       * calcula y devuelve true la cantidad de vocales del argumento
       */
      function contarVocales($cadena)
      {
          $vocales = 0;
          for ($i = 0; $i < strlen($cadena); $i++)
          {
              $letra = substr($cadena, $i, 1);
              if (esVocal($letra) !== false)
              {
                  $vocales++;
              }
          }
          return $vocales;
      }

      /**
       * 
       * calcula y devuelve el argumento guionizado
       */
      function guionizar($cadena)
      {
          $guionizado = "";
          $i = 0;
          for ($i = 0; $i < strlen($cadena) - 1; $i++)
          {
              $guionizado .= substr($cadena, $i, 1) . "-";
          }
          $guionizado .= substr($cadena, -1, 1);
          return $guionizado;
      }
      