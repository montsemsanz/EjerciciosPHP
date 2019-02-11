<?php

      // ejecutar consulta y devolver conjunto de resultados
      function obtenerResultado($conexion, $sql)
      {

          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // error en consulta
          {
              $error = "Error en consulta " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
          $datos = array();
          while ($fila = mysqli_fetch_array($resul))
          {
              $datos[] = $fila;
          }
          return $datos;
      }

      
      