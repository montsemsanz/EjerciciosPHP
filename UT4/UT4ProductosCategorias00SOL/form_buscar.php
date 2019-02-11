<?php
    $menu = 'menu.php';
    include "cabecera.php";
?>

<form id='form' action="index.php" method="post">
    <div id='datos'>
        <h3>Formulario de b&uacute;squeda</h3>
         <h4>Introduca el nombre y el precio  y se mostrar&aacute;n los productos
             que  contengan ese texto en su nombre y tengan un precio menor que el indicado  </h4>
    <label>Texto </label>
    <input type="text" name="texto" value ="<?php if (isset($texto)) echo filtrarDato($texto) ?>"  />
    <span class="error">
        <?php if (isset($errores['nombre'])) echo $errores['nombre'] ?>
    </span><br />
     <label>Precio </label>
    <input type="text" name="precio"  value ="<?php if (isset($precio)) echo filtrarDato($precio) ?>" />
    <span class="error">
        <?php if (isset($errores['precio'])) echo $errores['precio'] ?>
    </span><br />  
    
    <label>&nbsp;</label>
    <input type="submit" name="buscar" value="Buscar" /><br />
    </div>
</form>
<?php
     if (isset($productos))
     {
         foreach ($productos as $producto)
         {
             echo "<div class ='producto'>";
             echo filtrarDato($producto['nombre'])." -- ".filtrarDato($producto['precio'])." &euro;";
             echo "</div>";
         }
     }
    include "pie.php";
?>