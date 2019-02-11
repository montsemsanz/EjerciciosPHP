

<?php

      require_once 'conexion.php';
      require_once 'modelo.php';
      require_once 'funciones.php';
      // 5º---------------------- vista_actores
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'actores')
      {
          $sql = "SELECT *  FROM actores ORDER BY apellido";          
          $actores = obtenerResultado($conexion, $sql);           
          include "vista_actores.php";
          exit();
      }


      // 4º ---------------------- 
      if (isset($_POST['buscar']))
      {
          $annio = trim($_POST['annio']);          
          $errores = array();
          if ( ! isset($_POST['letra']))
          {
              $errores['letra'] = 'Seleccione letra';
          }
          else
          {
              $letra = trim($_POST['letra']);
          }
          if ( ! empty($errores))
          {
              include "form_buscar.php";
              exit();
          }
          $annio = mysqli_real_escape_string($conexion, $annio);
          $letra = mysqli_real_escape_string($conexion, $letra);
          $sql = "SELECT * FROM peliculas WHERE annio = $annio AND titulo LIKE '%$letra%' ORDER BY titulo";

          $peliculas = obtenerResultado($conexion, $sql);          
          include "form_buscar.php";
          exit();
      }
      // 3º ---------------- vista form_buscar
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'estrenos')
      {
          include "form_buscar.php";
          exit();
      }

      // 2º ----------------------  vista pelis_actores
      if (isset($_GET['opcion']) && $_GET['opcion'] == 'pelisActores')
      {
          $sql = "SELECT titulo, nombre, apellido FROM peliculas
                INNER JOIN peliculas_actores ON peliculas.cod_pelicula = peliculas_actores.cod_pelicula
                INNER JOIN actores ON peliculas_actores.id_actor = actores.id_actor ORDER BY apellido";
          $pelisActores = obtenerResultado($conexion, $sql);

          $sql = "SELECT nombre, apellido, COUNT(peliculas_actores.cod_Pelicula) AS 'Total peliculas' FROM actores \n"
                  . " INNER JOIN peliculas_actores ON actores.id_actor = peliculas_actores.id_actor 
                    GROUP BY actores.id_actor  ORDER BY apellido";
          // echo $sql;         
          $actoresTotalPeliculas = obtenerResultado($conexion, $sql);
          include 'vista_pelis_actores.php';
          exit();
      }




      // 1º --------- Vista inicio
      $sql = "SELECT * FROM peliculas ORDER BY titulo";
      $peliculas = obtenerResultado($conexion, $sql);
      include 'vista_inicio.php';
?>
