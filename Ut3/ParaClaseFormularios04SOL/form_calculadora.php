<?php
      include "cabecera.php";
?>
<h3>Calculadora </h3>
<form id="form"  action="calculadora.php" method="get">
    <div>
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
        <label>&nbsp;</label>
        <input type="submit" name="sumar"  value="Sumar"/>
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
