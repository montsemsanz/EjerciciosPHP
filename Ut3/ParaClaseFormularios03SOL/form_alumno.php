<?php
   
    include "cabecera.php";
?>
    <form id='form' action="index.php" method="post">
        <fieldset>
            <legend>Datos de un alumno</legend>
             <label>Nombre</label>
        <input type="text" name="nombre"  /><br />
        <label>Apellido</label>
        <input type="text" name="apellido" /><br />
        <label>Módulo</label> 
        <select name="modulo" >
            <option value="bd" >Bases de datos</option>
            <option value="aweb">Aplicaciones web</option>
            <option value="seg">Seguridad</option>
            <option value="so">Sistemas operativos</option>
        </select><br />
        <label>Nota</label> 
        <select name="nota" >
            <?php
                for ($i = 1; $i <= 10; $i++)
                {
                    echo "<option value='".$i." ' >$i</option>";
                }
            ?>
        </select><br />
        <label>&nbsp;</label>
        <input type="submit" name="enviar" value="Enviar" /><br />
        </fieldset>
       
        
    </form>
<?php
    include "pie.php";
?>
