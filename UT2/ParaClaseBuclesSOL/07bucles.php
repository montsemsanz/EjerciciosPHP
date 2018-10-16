<?php
    // strict DTD exige que los elementos dentro del form estén en algún contenedor, por ejemplo, un div, un p
    // para evitar problemas podemos poner transitional

     include "cabecera.php";
     // generamos botones
     // 
     // aunque no hayamos visto formularios se les puede dar 
     // cómo es un botón
     // <input type='submit' name='boton' value='Editar'/>
     
     echo "<h3>Generando botones</h3>\n";
     echo "<form id='form' action='#' method='get' >";
     echo "<div>";
     for ($i = 1; $i <= 10; $i++)
     {
         $nombre = "boton".$i;
         ?>
        <label> Botón <?php echo $i ?></label>
         <input type="submit" name="<?php echo $nombre ?>" value ="Editar "/>
         <input type="submit" name="<?php echo $nombre ?>" value ="Borrar "/><br />
     <?php
     }
       
     echo "</div></form>"; 
     
     include "pie.php";
?>
