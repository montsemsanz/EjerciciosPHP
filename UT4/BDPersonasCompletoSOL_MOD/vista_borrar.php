<?php
    include "cabecera.php";
    echo "<table><tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Est. civil</th><th>G&eacute;nero</th></tr>";
     foreach ($personas as $persona)
    {
  ?>
    <tr>
    
             <td><?php echo filtrarDato($persona['nombre']) ?> </td>
             <td><?php echo filtrarDato($persona['apellido']) ?> </td>
             <td><?php echo  filtrarDato($persona['edad']) ?> </td>
             <td><?php echo filtrarDato($persona['eCivil']) ?> </td>
             <td><?php echo filtrarDato($persona['genero']) ?> </td>
             <td>
                 <form action="index.php" method="post" >
                     <div>
                 <input type='submit' name='borrar' value='Borrar' />
                 <input type='hidden' name = 'id' value = "<?php echo filtrarDato($persona['idPersona']); ?>" />
                     </div>
                 </form>
             </td>
   
    </tr>
 <?php
    }
    echo "</table>";
    include "pie.php";
?>
