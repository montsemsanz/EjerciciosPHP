<?php
    include "cabecera.php";
 ?>
<form id="form"  action="index.php" method="get">
    <div id="datos">
        <label>Nombre</label>
        <input type="text" name="nombre" /><br />
        <label>Apellido</label>
        <input type="text" name="apellido" /><br />
        <label>&nbsp;</label>
        <input type="submit" name="saludar"  value="Saludar"/>
    </div>



</form>
<?php
    include "pie.php"; 
?>
