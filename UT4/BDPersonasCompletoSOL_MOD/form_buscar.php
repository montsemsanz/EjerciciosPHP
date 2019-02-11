
<?php
    include "cabecera.php";
?>
<form id='form' action="index.php" method="post">
    <div id='datos'>
        <h3>Formulario de b&uacute;squeda</h3>
         <h4>Introduca el texto de b&uacute;squeda y se mostrar&aacute;n las personas 
             que lo contengan en su nombre y/o apellido </h4>
    <label>Texto </label>
    <input type="text" name="texto" value ="<?php if (isset($texto)) echo filtrarDato($texto) ?>"/>
    <span class="error"><?php if (isset($error)) echo $error ?></span><br />  
    
    <label>&nbsp;</label>
    <input type="submit" name="buscar" value="Buscar" /><br />
    </div>
</form>
<?php
    if (isset($personas)) // para que la primera vez que se presenta
                          // el formualrio no de error
    {
        foreach ($personas as $persona)
        {
            echo "<div class='persona'>";
            echo "<p> " . filtrarDato($persona['nombre']) . " " .
                strtoupper(filtrarDato($persona['apellido'])) . "</p>";
            echo "</div>\n";
        }
    }
    include "pie.php";
?>