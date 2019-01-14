<?php
      include "cabecera.php";
?>
<h3>Calculadora con botones de radio</h3>
<form id="form"  action="calculadora_2.php" method="get">

    <label>Numero1</label>
    <input type="text" name="numero1" value="<?php
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
    <input type="text" name="numero2" value="<?php
          if (isset($numero2)) {
              echo htmlspecialchars($numero2);
          }
    ?>"/><br />
    <span class="error" ><?php
              if (isset($errores['numero2'])) {
                  echo $errores['numero2'];
              }
        ?></span><br />


    <input type="radio" name="oper" value="suma" 
    <?php
          if (isset($op) && $op == "suma") {
              echo 'checked = "checked"';
          }
    ?>/>Sumar
    <input type="radio" name="oper" value="resta"
    <?php
          if (isset($op) && $op == "resta") {
              echo 'checked = "checked"';
          }
    ?>/>Restar
    <input type="radio" name="oper" value="producto"
    <?php
          if (isset($op) && $op == "producto") {
              echo 'checked = "checked"';
          }
    ?>/>Multiplicar
    <input type="radio" name="oper" value="division" 
    <?php
          if (isset($op) && $op == "division") {
              echo 'checked = "checked"';
          }
    ?>/>Dividir <br />
    <label>&nbsp;</label>
    <span class="error" ><?php
              if (isset($errores['oper'])) {
                  echo $errores['oper'];
              }
        ?></span><br />
    <input type="submit" name="calcular"  value="Calcular"/>
    <div class="resultado">
        <?php
              if (isset($resultado)) {
                  echo $resultado;
              }
        ?>

    </div>

</form>
<?php
      include "pie.php";
?>
