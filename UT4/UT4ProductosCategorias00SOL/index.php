<?php

      require_once 'utils.php';
      require_once 'conexion.php';
      require_once 'modelo.php';


      // 11º Detectar envío del formualrio de nuevo producto
      // detectar click en el botón Insertar
      if (isset($_POST['nuevoprod'])) {
          // obtener los valores del formulario
          $nombre = trim($_POST['nombre']);
          $precio = trim($_POST['precio']);
          $cat = $_POST['categoria'];
          //verArray($_POST);
          // validar los datos del formulario
          $errores = array();
          if (empty($nombre)) {
              $errores['nombre'] = 'Introduzca nombre';
          }
          if (empty($precio)) {
              $errores['precio'] = 'Introduzca precio';
          }
          else if (!is_numeric($precio)) {
              $errores['precio'] = 'Introduzca valor num&eacute;rico';
          }
          if (!empty($errores)) {

              // ha habido errores
              // obtengo las categorías para mostrarlas en el formulario
              $sql = "SELECT * FROM categorias";
              $categorias = obtenerCategorias($conexion, $sql);
              include "form_nuevo_producto.php";
              exit();
          }

          $nombre = mysqli_real_escape_string($conexion, $nombre);
          $precio = mysqli_real_escape_string($conexion, $precio);
          $cat = mysqli_real_escape_string($conexion, $cat);

          // consulta de inserción en la BD
          $sql = "INSERT INTO productos (nombre, precio, idCategoria)
                VALUES ('$nombre', $precio, $cat) ";
          //echo $sql;
          insertarProducto($conexion, $sql);
          header('Location: index.php');
          exit();
      }

      // 10º Detectar click en enlace Nuevo producto   
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'nuevoprod') {
          // obtengo las categorías para mostrarlas en el formulario
          $sql = "SELECT * FROM categorias";
          $categorias = obtenerCategorias($conexion, $sql);
          // verArray($categorias);
          include "form_nuevo_producto.php";
          exit();
      }
      // 9º detectar envío formulario nueva categoría
      if (isset($_POST['nuevacat'])) {
          $nombre = trim($_POST['nombre']);

          if (empty($nombre)) {
              $error = "Introduzca nombre de categor&iacute;a";
          }

          if (!empty($error)) {
              include "form_nueva_categoria.php";
              exit();
          }
          $nombre = mysqli_real_escape_string($conexion, $nombre);
          $sql = "INSERT INTO categorias VALUES(null, '$nombre')";
          // echo $sql;
          insertarCategoria($conexion, $sql);
          header('Location: index.php?opcion=categorias');
          exit();
      }

      // 8º detectar click en Nueva categoría
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'nuevacat') {
          include "form_nueva_categoria.php";
          exit();
      }
      // 7º detectar click en Total Productos por categoría
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'totalcat') {
          // generar consulta 
          $sql = "SELECT  c.nombre as nomCategoria, COUNT(*) as 'Total productos' FROM productos AS p\n"
                  . " INNER JOIN categorias AS c\n"
                  . " ON p.idCategoria = c.idCategoria GROUP BY c.idCategoria";
          $categorias = obtenerCategorias($conexion, $sql);
          // verArray($productos);
          include "vista_total_categorias.php";
          exit();
      }
      // 6º detectar click en Productos Categorías
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'prodcate') {
          // generar consulta 
          $sql = "SELECT p.nombre as nomProducto, p.precio , c.nombre as nomCategoria FROM productos AS p\n"
                  . " INNER JOIN categorias AS c\n"
                  . " ON p.idCategoria = c.idCategoria LIMIT 0, 30 ";
          $productos = obtenerProductos($conexion, $sql);
          // verArray($productos);
          include "vista_productos_categorias.php";
          exit();
      }

      // 5º - detectar envío de formulario
      if (isset($_POST['buscar'])) {
          $texto = trim($_POST['texto']);
          $precio = trim($_POST['precio']);
          $errores = array();
          if (empty($texto)) {
              $errores['nombre'] = "Introduzca nombre";
          }
          if (empty($precio)) {
              $errores['precio'] = "Introduzca precio";
          }
          else if (!is_numeric($precio)) {
              $errores['precio'] = "Introduzca valor numérico";
          }
          if (!empty($errores)) {
              include "form_buscar.php";
              exit();
          }
          // generar consulta 
          $texto = mysqli_real_escape_string($conexion, $texto);
          $precio = mysqli_real_escape_string($conexion, $precio);
          $sql = "SELECT * FROM productos WHERE nombre LIKE '%" . $texto . "%' AND precio < $precio     ";

          // $sql = "SELECT * FROM productos WHERE nombre REGEXP '$texto' "
          //         . " AND precio < $precio     ";

          echo $sql;
          $productos = obtenerProductos($conexion, $sql);
          include "form_buscar.php";
          exit();
      }


      // 4º - detectar click en Buscar
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'buscar') {
          include "form_buscar.php";
          exit();
      }


      // 3º - consulta para mostrar productos ordenados por precio
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'ordprecio') {
          $sql = "SELECT * FROM productos ORDER BY precio DESC";
          $productos = obtenerProductos($conexion, $sql);
          include "vista_productos_precio.php";
          exit();
      }


      // 2º - consulta para mostrar categor�as
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'categorias') {
          $sql = "SELECT * FROM categorias ORDER BY nombre";
          $categorias = obtenerCategorias($conexion, $sql);
          include "vista_categorias.php";
          exit();
      }



      // 1º - consulta para mostrar vista_inicio.php
      $sql = "SELECT idProducto, nombre, precio FROM productos";
      $productos = obtenerProductos($conexion, $sql);
      include "vista_inicio.php";
?>
