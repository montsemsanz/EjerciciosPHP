<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="estilo.css" />
        <title>Formulario datos personales</title>
    </head>
    <body>
        <div id="contenido">
            <?php
                  echo "<pre>";
                  print_r($_POST);
                  echo "</pre>";

                  $nombre = $_POST['usuario'];
                  $clave = $_POST['clave'];
                  $resultado = "Ha introducido los siguientes datos <br />";
                  $resultado .= "Nombre: $nombre <br />";
                  $resultado .= "Password: $clave <br />";

                  if (isset($_POST['sexo']))
                  {
                      $sexo = $_POST['sexo'];
                      $resultado .= "Sexo: $sexo <br />";
                  }
                  else
                  {
                      $resultado .= "No ha seleccionado sexo <br />";
                  }

                  if (!isset($_POST['edad']))
                  {
                      $resultado .= "No ha seleccionado edad <br />";
                  }
                  else
                  {
                      if ($_POST['edad'] == "0a19")
                      {
                          $edad = "Entre 0 y 19 a&ntilde;os";
                      }
                      else if ($_POST['edad'] == "35a65")
                      {
                          $edad = "Entre 35 y 65 a&ntilde;os";
                      }
                      else
                      {
                          $edad = "M&aacute;s de 65 a&ntilde;os";
                      }
                      $resultado .= "Edad: $edad <br />";
                  }


                  if (isset($_POST['vivienda']))
                  {
                      $resultado .= "Usted posee vivienda <br />";
                  }
                  if (isset($_POST['trabaja']))
                  {
                      $resultado .= "Usted trabaja <br />";
                  }
                  if (isset($_POST['mus']))
                  {
                      $resultado .= "Usted sabe jugar al mus <br />";
                  }

                  $resultado .= "Sus comentarios: ".$_POST['comentarios']."  <br />";

                  $paises = ["es"=>"Espa&ntilde;", "fr"=>"Francia", "dt"=>"Alemania", "pt"=>"Portugal",
                                "it"=>"Italia", "nd"=>"Holanda", "jp"=>"Jap&oacute;", "ch"=>"China", "in"=>"India"];
                  $resultado .= "Pa&iacute;s: {$paises[$_POST['pais']] } <br />";

                  // podemos omitir el isset porque por defecto está seleccionada la primera opción
                  $colores = $_POST['colores'];

                  $resultado .= "Sus colores favoritos: ";
                  foreach ($colores as $color)
                  {
                      $resultado .= $color . "  ";
                  }
                  echo $resultado;
            ?>
        </div>
    </body>
</html>
