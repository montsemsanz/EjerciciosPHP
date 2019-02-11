
<?php
    include "cabecera.php";
?>

<form id='form' action="index.php" method="post">
    <div id='datos'>
        <h3>Formulario de b&uacute;squeda</h3>
         <h4>Introduca el texto de b&uacute;squeda y se mostrar&aacute;n las personas 
             que lo contengan en su nombre y/o apellido </h4>
    <label>Texto </label>
    <input type="text" name="texto" value ="<?php if (isset($texto)) echo htmlspecialchars($texto) ?>"/>
    <span class="error"><?php if (isset($errores['texto'])) echo $errores['texto'] ?></span><br />  
    <label>G&eacute;nero</label> 
    <input type="radio" name="genero" value ="h" 
         <?php if (isset($genero) && $genero == 'h') echo "checked = 'checked' " ?>  /><label> Hombre</label>
    <input type="radio" name="genero" value ="m" 
            <?php if (isset($genero) && $genero == 'm') echo "checked = 'checked' " ?>  /><label>Mujer</label> <br />
       
      <span class="error"><?php if (isset($errores["genero"])) echo $errores["genero"]?></span><br />
    <label>&nbsp;</label>
    <label>&nbsp;</label>
    <input type="submit" name="buscar" value="Buscar" /><br />
    </div>
</form>
<?php
    if (isset($personas)) // para que la primera vez que se presenta
                          // el formulario no de error
    {
        foreach ($personas as $persona)
        {
            echo "<div class='persona'>";
            echo "<p> " . $persona['nombre'] . " " .
                strtoupper($persona['apellido']) . "</p>";
            echo "</div>\n";
        }
    }
    include "pie.php";
?>