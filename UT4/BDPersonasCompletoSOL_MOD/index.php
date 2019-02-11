<?php

      require_once 'conexion.php';
      require_once 'funciones.php';
      require_once 'modelo.php';

      //-----------------------------------------------------------------------------
      // se ha hecho click en el enlace Personas y Cursos
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'varias') {
          // Consulta persona con cada curso que ha realizado
          $sql = "SELECT p.nombre, p.apellido,c.nombreCurso, c.horas
                FROM personas as p, personas_cursos as pc, cursos as c
                WHERE p.idPersona = pc.idPersona AND pc.idCurso = c.idCurso  
                ORDER BY p.apellido";

          $personas = obtenerPersonas($conexion, $sql);

          // Consulta persona con total de  cursos que ha realizado
          $sql = "SELECT p.nombre, p.apellido, COUNT(pc.idCurso) AS \"Total Cursos\"
                FROM personas as p, personas_cursos as pc 
                WHERE p.idPersona = pc.idPersona
                GROUP BY p.idPersona
                 ORDER BY p.apellido";
          $personas1 = obtenerPersonas($conexion, $sql);
          include "vista_varias.php";
          exit();
      }

      //-----------------------------------------------------------------------------
      if (isset($_GET['oper']) && $_GET['oper'] == 'editar') {
          $mensaje = 'Registro modificado correctamente';
      }

      // se ha pulsado el bot&oacute;n editar  en form_editar.php
      if (isset($_POST['accion'])) {
          $id = mysqli_real_escape_string($conexion, $_POST['id']);
          // recoger los datos del formulario y validar
          $nombre = trim($_POST['nombre']);
          $apellido = trim($_POST['apellido']);
          $edad = trim($_POST['edad']);
          $ecivil = trim($_POST['ecivil']);
          $genero = trim($_POST['genero']);
          $errores = validar($nombre, $apellido, $edad);
          if (!empty($errores)) {
              // ha habido errores
              include "form_editar.php";
              exit();
          }

          $nombre = mysqli_real_escape_string($conexion, $nombre);
          $apellido = mysqli_real_escape_string($conexion, $apellido);
          $edad = mysqli_real_escape_string($conexion, $edad);
          $ecivil = mysqli_real_escape_string($conexion, $ecivil);
          $genero = mysqli_real_escape_string($conexion, $genero);

          // consulta de actualizaci&oacute;n en la BD
          $sql = "UPDATE personas SET nombre = '$nombre',
                                    apellido = '$apellido',
                                    edad = '$edad',
                                    eCivil = '$ecivil',
                                    genero = '$genero'
                WHERE idPersona = '$id' ";
          modificarPersona($conexion, $sql);
          header('Location: index.php?oper=editar');
          exit();
      }


      // se ha pulsado el bot&oacute;n editar  en vista_editar.php
      if (isset($_POST['editar'])) {
          $id = mysqli_real_escape_string($conexion, $_POST['id']);
          // leo el registro con el id trasmitido y que hay que modificar
          $sql = "SELECT * FROM personas
                 WHERE idPersona = '$id' ";
          $fila = obtenerPersona($conexion, $sql);
          $nombre = $fila['nombre'];
          $apellido = $fila['apellido'];
          $edad = $fila['edad'];
          $ecivil = $fila['eCivil'];
          $genero = $fila['genero'];
          include "form_editar.php";
          exit();
      }
      // se ha hecho click en el enlace Modificar
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'editar') {
          $sql = 'SELECT * FROM personas';
          $personas = obtenerPersonas($conexion, $sql);
          include "vista_editar.php";
          exit();
      }

      //-----------------------------------------------------------------------------
      if (isset($_GET['oper']) && $_GET['oper'] == 'borrar') {
          $mensaje = 'Registro borrado correctamente';
      }

      // se ha hecho click en el bot&oacute;n Borrar  
      if (isset($_POST['borrar'])) {
          // recogemos el valor transmitido en el campo oculto
          $id = mysqli_real_escape_string($conexion, $_POST['id']);
          // creamos la consulta de borrado y la ejecutamos
          $sql = "DELETE FROM personas WHERE idPersona = '$id' ";
          borrarPersona($conexion, $sql);
          header('Location: index.php?oper=borrar');
          exit();
      }

      // se ha hecho click en el enlace Borrar
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'borrar') {
          $sql = 'SELECT * FROM personas';
          $personas = obtenerPersonas($conexion, $sql);
          include "vista_borrar.php";
          exit();
      }

      //-----------------------------------------------------------------------------

      if (isset($_GET['oper']) && $_GET['oper'] == 'inser') {
          $mensaje = 'Registro insertado correctamente';
      }

      // se ha hecho click en el enlace Insertar
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'insertar') {
          include "form_insertar.php";
          exit();
      }
      // se ha hecho click en el bot�n Insertar
      if (isset($_POST['insertar'])) {
          // recoger los datos del formulario y validar
          $nombre = trim($_POST['nombre']);
          $apellido = trim($_POST['apellido']);
          $edad = trim($_POST['edad']);
          $ecivil = trim($_POST['ecivil']);
          $genero = trim($_POST['genero']);
          $errores = validar($nombre, $apellido, $edad);
          if (!empty($errores)) {
              // ha habido errores
              include "form_insertar.php";
              exit();
          }

          $nombre = mysqli_real_escape_string($conexion, $nombre);
          $apellido = mysqli_real_escape_string($conexion, $apellido);
          $edad = mysqli_real_escape_string($conexion, $edad);
          $ecivil = mysqli_real_escape_string($conexion, $ecivil);
          $genero = mysqli_real_escape_string($conexion, $genero);

          // consulta de inserci&oacute;n en la BD
          $sql = "INSERT INTO personas (idPersona, nombre, apellido, edad, eCivil, genero)
                VALUES (null, '$nombre' , '$apellido', $edad, '$ecivil', '$genero') ";
          insertarPersona($conexion, $sql);
          header('Location: index.php?oper=inser');
          exit();
      }

      //-----------------------------------------------------------------------------
      // se ha hecho click en el enlace Buscar
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'buscar') {
          include "form_buscar.php";
          exit();
      }

      // se ha hecho click en el bot&oacute;n Buscar enviando el formulario
      if (isset($_POST['buscar'])) {
          // recoger los datos del formulario y validar
          $texto = trim($_POST['texto']);
          if (empty($texto)) {
              $error = "Introduzca texto";
              include "form_buscar.php";
              exit();
          }
          // datos correctos, filtramos y creamos consulta SQL
          $texto = mysqli_real_escape_string($conexion, $texto);
//          $sql = "SELECT nombre, apellido FROM personas 
//                WHERE nombre LIKE '%$texto%' OR apellido LIKE '%$texto%'";

          $sql = "SELECT nombre, apellido FROM personas 
                WHERE nombre REGEXP '$texto' OR apellido REGEXP '$texto'";


          $personas = obtenerPersonas($conexion, $sql);
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
