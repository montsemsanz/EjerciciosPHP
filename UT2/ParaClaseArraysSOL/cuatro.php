<?php
      require_once 'funciones.php';
      include "includes/cabecera.php";
      
      // información de un libro
      $libro =  ["isbn" => "124356-A",
                    "titulo" => "El asedio",
                     "autor" => "Arturo Pérez Reverte",
                    "precio" => 22.50];
     
      echo "<h3> Datos de un libro</h3>";
      foreach ($libro as $key => $valor)
      {
          echo "<p>".strtoupper($key)." - $valor</p>"; // comentar la función para string strtoupper
      }
       // información de varios libros
      $libro1 = ["isbn" => "124356-A",
                    "titulo" => "El asedio",
                     "autor" => "Arturo Pérez Reverte",
                    "precio" => 22.50];
       // información de un libro
      $libro2 = ["isbn" => "12222-N",
                    "titulo" => "La reina del sur",
                     "autor" => "Arturo Pérez Reverte",
                     "precio" => 20];
       // información de un libro
      $libro3 = ["isbn" => "111116-P",
                    "titulo" => "El maestro de esgrima",
                     "autor" => "Arturo Pérez Reverte",
                    "precio" => 9];
      
      // guardamos los tres libros en un array (los arrays bidimensionales son arrays de arrays
      $libros['libro1'] = $libro1;
      $libros['libro2'] = $libro2;
      $libros['libro3'] = $libro3;
      verArray($libros);
      echo "<pre>";
      var_dump($libros); // otra manera de mostrar cómo es internamente el array
      
      // bucle para recorrer el array bidimensional
      foreach ($libros as $key => $libro)
      {
          
          foreach ($libro as $key => $valor)
          {
              echo "<p>".strtoupper($key)." - $valor</p>"; // comentar la función para string strtoupper
          }
          echo "<hr />";
      }
      echo "</pre>";
      include "includes/pie.php";
?>
