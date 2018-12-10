<?php
     include "cabecera.php";
?>
<form id='form' action="proceso_formulario.php" method="post">
    <div>
        <fieldset>
            <legend>Datos personales</legend>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" /><br />
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" /><br />
            <label >Fecha nacimiento</label>
            <select name ="dia" id="dia">
                <?php
                     
                     for ($i = 1; $i <= 31; $i++)
                     {
                         echo "<option value = '$i'>$i</option>";
                     }
                ?>
                </select>
                <select name="mes" id ="mes">
                <?php
                       //   definir el array $meses y generar las opciones del menú
                     $meses = ["Eneroo","Febrero", "Marzo", "Abril", "Mayo", 
                                "Junio", "Julio", "Agosto", "Septiembre", "Octubre", 
                                "Noviembre", "Diciembre"];
                     for ($i = 0; $i < count($meses); $i++)
                     {
                         echo "<option value = '$meses[$i]'>$meses[$i]</option>";
                     }
                ?>
                    </select>
              <select name="anio" id="anio">
                <?php
                      
                     for ($i = 1940; $i <= 2013; $i++)
                     {
                         echo "<option value = '$i'>$i</option>";
                     }
                ?>
            </select>
        </fieldset>
    </div>
   <! ---------------------------------------- !>
   <div>
   <fieldset>
            <legend>Perfil profesional</legend>
            <label for="situacion">Situaci&oacute;n laboral</label>
            <input type="radio" name="situacion" value ="activo" id="activo" /> <label class="situacion">Activo</label>
            <input type="radio" name="situacion" value ="parado/a" id="parado" /><label class="situacion">Parado/a</label><br/>
             <label >Perfil</label>
            <select name="perfil[]" id="perfil" multiple="multiple">
                <?php
                        
                     $perfiles = ["Administraci&oacute;n","Asesor&iacute;a", "Comercial",
                                "Programaci&oacute;n", "Restauración"];
                     for ($i = 0; $i < count($perfiles); $i++)
                     {
                         echo "<option value = '$perfiles[$i]'>$perfiles[$i]</option>";
                     }
                ?>
            </select>
        </fieldset>
    </div>
   <! ---------------------------------------- !>
    <div>
   <fieldset>
            <legend>Formación</legend>
            <label for="nivel">Nivel</label>             
            <select name="nivel" id="nivel">
                <?php
                       
                     $niveles = ["Sin estudios","Primaria", "ESO",
                                "Bachillerato", "Universidad"];
                     for ($i = 0; $i < count($niveles); $i++)
                     {
                         echo "<option value = '$niveles[$i]'>$niveles[$i]</option>";
                     }
                ?>
            </select>
        </fieldset>
    </div>
      <! ---------------------------------------- !>
    <div>
         <fieldset>
            <legend>Idiomas</legend>
            <div class="idioma"><input type="checkbox" name="idiomas[]" value="Euskera" /><label>Euskera</label></div>
          <div class="idioma"><input type="checkbox" name="idiomas[]" value="Inglés" /><label>Ingl&eacute;s</label> </div>
         <div class="idioma"><input type="checkbox" name="idiomas[]" value="Francés" /><label>Franc&eacute;s</label> </div>
         <div class="idioma"><input type="checkbox" name="idiomas[]" value="Alemén" /><label>Alem&aacute;n </label></div>
         <div class="idioma"><input type="checkbox" name="idiomas[]" value="Chino" /><label>Chino </label></div>
        <label>&nbsp;</label>
         </fieldset>
    </div>
   <div>
        <input type="submit" name="enviar" value="Enviar" id="enviar"/><br />
    </div>
</form>
<?php
     include "pie.php";
?>
