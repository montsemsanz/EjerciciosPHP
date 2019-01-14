<?php
      include "cabecera.php";
?>
<h3>Calculadora con  men&uacute; de selecci&oacute;n </h3>
<form id="form"  action="calculadora_4.php" method="get">
    <div>
        <label>Numero1</label>
        <input type="text" name="numero1" 
               value="<?php
                     if (isset($numero1)) {
                         echo htmlspecialchars($numero1);
                     }
               ?>"/><br />
        <span class="error" ><?php
                  if (isset($errores['numero1'])) {
                      echo $errores['numero1'];
                  }
            ?></span><br />    
        <label>Numero2</label>
        <input type="text" name="numero2"
               value="<?php
                     if (isset($numero2)) {
                         echo htmlspecialchars($numero2);
                     }
               ?>"/><br />
        <span class="error" ><?php
                  if (isset($errores['numero2'])) {
                      echo $errores['numero2'];
                  }
            ?></span><br />
        <p> Elija operaci&oacute;n</p>


        <select name="oper[]" size="4" multiple="multiple"   > 
            <option value="suma" <?php
                  if (isset($arrayop) && in_array("suma", $arrayop)) {
                      echo '  selected = "selected"';
                  }
            ?>  >Sumar </option>
            <option value="resta"  <?php
                  if (isset($arrayop) && in_array("resta", $arrayop)) {
                      echo '  selected = "selected"';
                  }
            ?> >Restar</option>
            <option value="producto" <?php
                  if (isset($arrayop) && in_array("producto", $arrayop)) {
                      echo '  selected = "selected"';
                  }
            ?> >Multiplicar</option>
            <option value="division" <?php
                  if (isset($arrayop) && in_array("division", $arrayop)) {
                      echo '  selected = "selected"';
                  }
            ?> >Dividir</option>
        </select><br /><span class="error" ><?php
                  if (isset($errores['oper'])) {
                      echo $errores['oper'];
                  }
            ?></span><br /><br />
        <label>&nbsp;</label>
        <input  type="submit" name="calcular"  value="Calcular"/>
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
