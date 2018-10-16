<?php
      // strict DTD exige que los elementos dentro del form estén en algún contenedor, por ejemplo, un div, un p
    // para evitar problemas podemos poner transitional

      include "cabecera.php";
       // generamos casillas de verificación, cada una con su nombre, casilla1, casilla2, ...
      // 
      // aunque no hayamos visto formularios se les puede dar 
      // cómo es una casilla
      // <input type='checkbox' name='casilla' value='casilla'/>

      echo "<h3>Generando casillas de verificación</h3>\n";
      echo "<form action='#' method='get' >";
      echo "<div>";
      for ($i = 1; $i <= 10; $i ++ )
      {
          $nombre = "casilla" . $i;
          ?>

          <input type="checkbox" name="<?php echo $nombre ?>"
                 value ="<?php echo $i ?> "/>Casilla <?php echo $i ?><br />

          <?php
      }

      echo "</div></form>";

      include "pie.php";
?>
