<?php
      include "cabecera.php";
?>
<h3>Calculadora con casillas de verificaci&oacute;n</h3>
<form id="form"  action="calculadora_5.php" method="get">
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


        <input type="checkbox" name="oper[]" value="suma" 
        <?php
              if (isset($oper) && in_array("suma", $oper)) {
                  echo 'checked = "checked"';
              }
        ?>/>Sumar
        <input type="checkbox" name="oper[]" value="resta"
        <?php
              if (isset($oper) && in_array("resta", $oper)) {
                  echo 'checked = "checked"';
              }
        ?>/>Restar
        <input type="checkbox" name="oper[]" value="producto"
        <?php
              if (isset($oper) && in_array("producto", $oper)) {
                  echo 'checked = "checked"';
              }
        ?>/>Multiplicar
        <input type="checkbox" name="oper[]" value="division" 
        <?php
              if (isset($oper) && in_array("division", $oper)) {
                  echo 'checked = "checked"';
              }
        ?>/>Dividir <br />
        <label>&nbsp;</label>
        <input type="submit" name="calcular"  value="Calcular"/><br />
        <span class="error" ><?php
                  if (isset($errores['oper'])) {
                      echo $errores['oper'];
                  }
            ?></span><br />
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
