<?php

      // ejecutar consulta y devolver conjunto de resultados
      function obtenerPersonas($conexion, $sql)
      {

          $resul = mysqli_query($conexion, $sql);
          if (!$resul) { // ha ocurrido un error
              $error = "Error en consulta - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
//
          $personas = []; // guardo en este array las personas devueltas por la consulta
          // para mostrar la plantilla de vista_inicio.php
          while ($fila = mysqli_fetch_array($resul)) {
              $personas[] = $fila;
          }
          return $personas;
      }
      