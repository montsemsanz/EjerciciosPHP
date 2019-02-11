
<?php
    include "cabecera.php";
?>

<form id='form' action="index.php" method="post">
    <div id='datos'>
        <h3>Formulario de b&uacute;squeda</h3>
         <h4>Pel&iacute;culas estrenadas en el a&ntilde;o 
             seleccionado y que contienen en el t&iacute;tulo la letra seleccionada</h4>
    <label>A&ntilde;o de estreno </label>
    <select name="annio">
        <?php 
            for ($i = 1995; $i <= 2012; $i++)
            {
                if (isset($annio) && $annio == $i)
                {
                    $sel = "selected = 'selected'";
                }
                else
                {
                    $sel = "";
                }
                echo "<option value ='$i' $sel> $i</option>\n";
            }
        ?>
        
    </select><br />
    <label>Contienen en el nombre</label> 
    <input type="radio" name="letra" value ="a" 
         <?php if (isset($letra) && $letra == 'a') echo "checked = 'checked' " ?>  /><label class='radio'> a</label>
    <input type="radio" name="letra" value ="e" 
           <?php if (isset($letra) && $letra == 'e') echo "checked = 'checked' " ?>  /><label class='radio'>e</label> 
    <input type="radio" name="letra" value ="o" 
           <?php if (isset($letra) && $letra == 'o') echo "checked = 'checked' " ?>  /><label class='radio'>o</label>   
      <span class="error"><?php if (isset($errores["letra"])) echo $errores["letra"]?></span><br />
  
    <input type="submit" name="buscar" value="Buscar" /><br />
    </div>
</form>
<?php
    if (isset($peliculas)) // para que la primera vez que se presenta
                          // el formulario no de error
    {
        
        foreach ($peliculas as $peli)
        {
            echo "<div class='pelicula'>";
            echo "<p> " . filtrarDato($peli['titulo']) ."</p>";
            echo "</div>\n";
        }
    }
    include "pie.php";
?>