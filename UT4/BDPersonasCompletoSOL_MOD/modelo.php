<?php

      // ejecutar consulta y devolver conjunto de resultados
      function obtenerPersonas($conexion, $sql)
      {

          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // ha ocurrido un error
          {
              $error = "Error en consulta - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
//
          $personas = []; // guardo en esta array las personas devueltas por la consulta
          // para mostrar la plantilla de vista_inicio.php
          while ($fila = mysqli_fetch_array($resul))
          {
              $personas[] = $fila;
          }
          return $personas;
      }
      
       function obtenerPersona($conexion, $sql)
      {

          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // ha ocurrido un error
          {
              $error = "Error en consulta - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
          $persona = mysqli_fetch_array($resul);          
          return $persona;
      }

      function insertarPersona($conexion, $sql)
      {
          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // ha ocurrido un error
          {
              $error = "Error en consulta de inserci&oacute;n - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
      }

      function borrarPersona($conexion, $sql)
      {
          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // ha ocurrido un error
          {
              $error = "Error en consulta de borrado - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
      }

      function modificarPersona($conexion, $sql)
      {
          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // ha ocurrido un error
          {
              $error = "Error en consulta de edición - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
      }
      