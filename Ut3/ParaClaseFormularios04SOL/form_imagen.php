<?php
      include "cabecera.php";
?>
<form id="form"  action="ver_imagen.php" method="get">
    <div>
        <label>Introduzca valor entre 1 y 6</label>
        <input type="text" name="numero" value="<?php
              if (isset($numero)) {
                  echo htmlspecialchars($numero);
              }
        ?>"/><br />
        <span class="error" ><?php
                  if (isset($errores)) {
                      echo $errores['numero'];
                  }
            ?></span><br />
        <label>&nbsp;</label>
        <input type="submit" name="ver"  value="Ver imagen"/>
        <div class="resultado">
            <?php
                  if (isset($resultado)) {
                      echo $resultado;
                  }
            ?>

        </div>
    </div> 
</form>
<?php
      include "pie.php";
?>
