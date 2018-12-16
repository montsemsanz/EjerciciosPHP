<?php
      include "cabecera.php";
      require_once 'utilidades.php';
?>
<form id="form"  action="index.php" method="post">
    <div id="datos">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php if (isset($nombre)) echo htmlspecialchars($nombre) ?>"/>
        <span class='error'>
            <?php if (isset($errores['nombre'])) echo $errores['nombre'] ?>
        </span><br />
        <label>M&oacute;dulo</label> 
        <select name="modulo" >
            <?php
                  $modulos = array("Seguridad", "Bases de datos", "Aplicaciones web", "Servicios de Red");
                  foreach ($modulos as $m)
                  {

                      if (isset($modulo) && $modulo == $m)
                      {
                          $sele = "selected = 'selected'";
                      }
                      else
                      {
                          $sele = "";
                      }
                      echo "<option value = '$m' $sele>$m</option>\n";
                  }
            ?>
        </select><br />
        <label>Nota</label> 
        <select name="nota" >
            <?php
                  for ($i = 1; $i <= 10; $i ++)
                  {

                      if (isset($nota) && $nota == $i)
                      {
                          $sele = "selected = 'selected'";
                      }
                      else
                      {
                          $sele = "";
                      }
                      echo "<option value = '$i' $sele>$i</option>\n";
                  }
            ?>
        </select><br />

        <label>Curso</label>
        <input type="radio" name="curso" value ="asi1a"
        <?php
              if (isset($curso) && ($curso == 'asi1a'))    echo 'checked = "checked"';
               
        ?>    />Asi 1&ordm; A
        <input type="radio" name="curso" value ="asi1b"
        <?php
              if (isset($curso) && ($curso == 'asi1b'))    echo 'checked = "checked"';
                   
        ?>    />Asi 1&ordm; B
        <span class='error'>
            <?php if (isset($errores['curso'])) echo $errores['curso'] ?>
        </span><br /> 
        <label>Idiomas</label>
        <input type="checkbox" name="idioma[]" value="ingles" 
        <?php
              if (isset($idioma) && in_array("ingles", $idioma))  echo 'checked = "checked"';
               
        ?> />Ingl&eacute;s
        <input type="checkbox" name="idioma[]" value="frances"
        <?php
              if (isset($idioma) && in_array("frances", $idioma))  echo 'checked = "checked"';
               
        ?>  />Franc&eacute;s
        <input type="checkbox" name="idioma[]" value="euskera" 
        <?php
              if (isset($idioma) && in_array("euskera", $idioma)) echo 'checked = "checked"';
               
        ?>  />Euskera
        <input type="checkbox" name="idioma[]" value="castellano" 
        <?php
              if (isset($idioma) && in_array("castellano", $idioma)) echo 'checked = "checked"';
               
        ?>  />Castellano
        <span class='error'>
            <?php if (isset($errores['idioma'])) echo $errores['idioma'] ?>
        </span><br /><br/>
        <label>&nbsp;</label>
        <input type="submit" name="enviar"  value="Enviar"/>
    </div>

</form>
<?php
      if (isset($resultado))
      {
          echo "<div class='resultado'>";
          echo $resultado;
          echo "</div>";
      }
      include "pie.php";
?>
