<?php
      include "cabecera.php";
?>
<h3>Calculadora con  men&uacute; de selecci&oacute;n </h3>
<form id="form"  action="calculadora_3.php" method="get">
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
        <label>Elija operaci&oacute;n</label>

        <select name="oper" > 
            <option value="suma" <?php
                          if (isset($op) && $op == "suma") {
                              echo '  selected = "selected"';
                          }
                    ?> >Sumar </option>
            <option value="resta" <?php
                          if (isset($op) && $op == "resta") {
                              echo '  selected = "selected"';
                          }
                    ?> >Restar</option>
            <option value="producto" <?php
                          if (isset($op) && $op == "producto") {
                              echo '  selected = "selected"';
                          }
                    ?> >Multiplicar</option>
            <option value="division" <?php
                          if (isset($op) && $op == "division") {
                              echo '  selected = "selected"';
                          }
                    ?> >Dividir</option>
        </select><br /><br />
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
