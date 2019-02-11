
<?php
     $menu = "menu.php";
    include "cabecera.php";
?>

<form id='form' action="index.php" method="post">
    <div id='datos'>
    <label>Nombre producto</label>
    <input type="text" name="nombre" value ="<?php if (isset($nombre))echo filtrarDato($nombre) ?>"/>
    <span class="error"><?php if (isset($errores["nombre"])) echo $errores["nombre"]?></span><br />
    
    <label>Precio</label>
    <input type="text" name="precio" value ="<?php if (isset($precio)) echo filtrarDato($precio) ?>" />
    <span class="error"><?php if (isset($errores["precio"])) echo $errores["precio"]?></span><br />
    
    <label>Categor&iacute;a</label> 
      <select name="categoria" >
              <?php
                foreach ($categorias as $cate)
                {
                    echo "<option value='".filtrarDato($cate['idCategoria'])."'";
                    if (isset($cat) && $cat == $cate['idCategoria'])
                    {
                         
                        $sel = "selected = 'selected' ";
                    }
                    else
                    {
                        $sel = "";
                    }
                    echo " $sel>".htmlspecialchars($cate['nombre'])."</option>\n";
                }
            ?>
     </select><br />
    
    <label>&nbsp;</label>
    <input type="submit" name="nuevoprod" value="Insertar producto" /><br />
    </div>
</form>
<?php
    include "pie.php";
?>