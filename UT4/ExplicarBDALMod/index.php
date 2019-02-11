<?php

      require_once 'conexion.php';
      require_once 'funciones.php';
      require_once 'modelo.php';

      // se ha hecho click en el botón Buscar enviando el formulario
      if (isset($_POST['buscar'])) {
          // recoger los datos del formulario y validar
          $texto = trim($_POST['texto']);
          $errores = [];
          if (empty($texto)) {
              $errores['texto'] = "Introduza texto";
          }
          if (isset($_POST['genero'])) {
              $genero = trim($_POST['genero']);
          }
          else {
              $errores['genero'] = "Seleccione g&eacute;nero";
          }
          if (!empty($errores)) {
              include "form_buscar.php";
              exit();
          }

          // datos correctos, filtramos y creamos consulta SQL
          $texto = mysqli_real_escape_string($conexion, $texto);
          $genero = mysqli_real_escape_string($conexion, $genero);
//          $sql = "SELECT nombre, apellido FROM personas 
//                WHERE genero = '$genero' AND (nombre LIKE '%$texto%' OR apellido LIKE '%$texto%')";

          $sql = "SELECT nombre, apellido FROM personas 
                WHERE genero = '$genero' AND nombre REGEXP '$texto' OR apellido REGEXP '$texto'";

          //  echo $sql;

          $personas = obtenerPersonas($conexion, $sql);
          include "form_buscar.php";
          exit();
      }

      //-----------------------------------------------------------------------------
      // se ha hecho click en el enlace Buscar
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'buscar') {
          include "form_buscar.php";
          exit();
      }



      //-----------------------------------------------------------------------------
      // se ha hecho click en el enlace Listar
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'listar') {
          $sql = 'SELECT * FROM personas';
          $personas = obtenerPersonas($conexion, $sql);
          include "vista_listar.php";
          exit();
      }


      //-----------------------------------------------------------------------------
      // vale para click en Inicio o cuando se solicita el script index.php la primera vez
      $sql = 'SELECT nombre, apellido FROM personas';
      $personas = obtenerPersonas($conexion, $sql);
      include "vista_inicio.php";
?>
