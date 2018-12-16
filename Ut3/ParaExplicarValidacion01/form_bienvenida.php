<?php
      include "cabecera.php";
?>
<form id="form"  action="index.php" method="post">
    <div id="datos">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php if (isset($nombre)) echo htmlspecialchars($nombre) ?>"/>
        <span class='error'>
            <?php if (isset($errores['nombre'])) echo $errores['nombre'] ?>
        </span><br />
        <label>Apellido</label>
        <input type="text" name="apellido" value="<?php if (isset($apellido)) echo htmlspecialchars($apellido) ?>"/>
        <span class='error'>
            <?php if (isset($errores['apellido'])) echo $errores['apellido'] ?>
        </span><br />
        <label>Edad</label>
        <input type="text" name="edad" value="<?php if (isset($edad)) echo htmlspecialchars($edad) ?>"/>
        <span class='error'>
            <?php if (isset($errores['edad'])) echo $errores['edad'] ?>
        </span><br />
        <label>&nbsp;</label>
        <input type="submit" name="saludar"  value="Saludar"/>
    </div>

</form>
<?php
      if (isset($resultado)) {
          echo "<div class='resultado'>";
          echo $resultado;
          echo "</div>";
      }

      include "pie.php";
?>
