<?php

      // ejecutar consulta y devolver conjunto de resultados
      function obtenerProductos($conexion, $sql)
      {

          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // ha ocurrido un error
          {
              $error = "Error en consulta - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
//
          $productos = []; // guardo en esta array las personas devueltas por la consulta
          // para mostrar la plantilla de vista_inicio.php
          while ($fila = mysqli_fetch_array($resul))
          {
              $productos[] = $fila;
          }
          return $productos;
      }

      // ejecutar consulta y devolver conjunto de resultados
      function obtenerCategorias($conexion, $sql)
      {

          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // ha ocurrido un error
          {
              $error = "Error en consulta - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
//
          $categorias = []; // guardo en esta array las personas devueltas por la consulta
          // para mostrar la plantilla de vista_inicio.php
          while ($fila = mysqli_fetch_array($resul))
          {
              $categorias[] = $fila;
          }
          return $categorias;
      }

      function insertarProducto($conexion, $sql)
      {
          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // ha ocurrido un error
          {
              $error = "Error en consulta de inserci&oacute;n - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
      }
      
      function insertarCategoria($conexion, $sql)
      {
          $resul = mysqli_query($conexion, $sql);
          if (!$resul) // ha ocurrido un error
          {
              $error = "Error en consulta de inserci&oacute;n - " . mysqli_error($conexion);
              include "error.php";
              exit();
          }
      }
      