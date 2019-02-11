
<?php
    include "cabecera.php";
?>

<form id='form' action="index.php" method="post">
    <div id='datos'>
    <label>Nombre</label>
    <input type="text" name="nombre" value ="<?php if (isset($nombre)) echo filtrarDato($nombre) ?>"/>
    <span class="error"><?php if (isset($errores["nombre"])) echo $errores["nombre"]?></span><br />
    
    <label>Apellido</label>
    <input type="text" name="apellido" value ="<?php if (isset($apellido)) echo filtrarDato($apellido) ?>" />
    <span class="error"><?php if (isset($errores["apellido"])) echo $errores["apellido"]?></span><br />
    
    <label>Edad</label>
    <input type="text" name="edad" value ="<?php if (isset($edad)) echo filtrarDato($edad) ?>" />
    <span class="error"><?php if (isset($errores["edad"])) echo $errores["edad"]?></span><br />
     <label>Estado civil</label> 
     <?php $estados = array('soltero/a', 'casado/a', 'viudo/a' , 'divorciado/a'); ?>
      <select name="ecivil" >
              <?php
                foreach ($estados as $estado)
                {
                    $e = substr($estado, 0, 1); 
                    echo "<option value='".$e."'";
                    echo " >$estado</option>\n";
                }
            ?>
     </select><br />
    <label>G&eacute;nero</label> 
    <input type="radio" name="genero" value ="h" checked="checked" /><label> Hombre</label>
    <input type="radio" name="genero" value ="m" /><label>Mujer</label> <br />
    
    <label>&nbsp;</label>
    <input type="submit" name="insertar" value="Insertar" /><br />
    </div>
</form>
<?php
    include "pie.php";
?>