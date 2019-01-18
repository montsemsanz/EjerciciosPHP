<?php
      include "cabecera.php";
      if (isset($resultado)) {
          echo "<div class='resultado'>";
          echo $resultado;
          echo "</div>";
      }
?>

<form id="form" action = "index.php" method = "post">
    <div>
        <fieldset>
            <legend>Datos personales</legend>
            <div>
                <label>Nombre</label>
                <input type="text" name ="nombre" 
                       value ="<?php
                             if (isset($nombre)) {
                                 echo htmlspecialchars($nombre);
                             }
                       ?>"/>
                <span class='error'><?php
                          if (isset($errores['nombre'])) {
                              echo $errores['nombre'];
                          }
                    ?>  </span>
                <label>N&ordm; hijos</label>
                <input type="text" name ="hijos" 
                       value ="<?php
                             if (isset($hijos)) {
                                 echo htmlspecialchars($hijos);
                             }
                       ?>"/>
                <span class='error'><?php
                          if (isset($errores['hijos'])) {
                              echo $errores['hijos'];
                          }
                    ?>  </span>
                <label>Sexo</label>
                <input type="radio" name ="sexo" value ="hombre" 
                <?php
                      if (isset($sexo) && $sexo == 'hombre') {
                          echo "checked = 'checked'";
                      }
                ?> />Hombre
                <input type="radio" name ="sexo" value ="mujer" 
                <?php
                      if (isset($sexo) && $sexo == 'mujer') {
                          echo "checked = 'checked'";
                      }
                ?>  />Mujer
                <span class='error'><?php
                          if (isset($errores['sexo'])) {
                              echo $errores['sexo'];
                          }
                    ?>  </span>
                <label>Provincia</label>
                <select class='ancho' name="provincia">
                    <?php
                          $provincias = array("Navarra", "Logro&ntilde;o", "Madrid", "Barcelona", "Asturias");
                          sort($provincias);
                          foreach ($provincias as $pro) {
                              if (isset($provincia) && $provincia == $pro) {
                                  $sel = "selected = 'selected' ";
                              }
                              else {
                                  $sel = '';
                              }
                              echo "<option $sel value='$i'>$pro</option>\n";
                          }
                    ?>

                </select>
            </div>

            <div>   
                <label>Fecha nacimiento</label>
                <label class="fecha">D&iacute;a</label>
                <select name="dia">
                    <?php
                          for ($i = 1; $i <= 31; $i++) {
                              if (isset($dia) && $dia == $i) {
                                  $sel = "selected = 'selected' ";
                              }
                              else {
                                  $sel = '';
                              }
                              echo "<option $sel>$i</option>\n";
                          }
                    ?>

                </select>
                <label class="fecha">Mes</label>
                <select name="mes">
                    <?php
                          for ($i = 1; $i <= 12; $i++) {
                              if (isset($mes) && $mes == $i) {
                                  $sel = "selected = 'selected' ";
                              }
                              else {
                                  $sel = '';
                              }
                              echo "<option $sel>$i</option>\n";
                          }
                    ?>
                </select>
                <label class="fecha">A&ntilde;o</label>
                <select name="anio">
                    <?php
                          for ($i = 1900; $i <= 2011; $i++) {
                              if (isset($anio) && $anio == $i) {
                                  $sel = "selected = 'selected' ";
                              }
                              else {
                                  $sel = '';
                              }
                              echo "<option $sel>$i</option>\n";
                          }
                    ?>
                </select>
            </div>

            <div>
                <label>Temas de inter&eacute;s </label>
                <input type='checkbox' name="temas[]" value ="html"
                <?php
                      if (isset($temas) && in_array("html", $temas)) {
                          echo "checked = 'checked' ";
                      }
                ?> /> HTML  
                <input type='checkbox' name="temas[]" value ="css"
                <?php
                      if (isset($temas) && in_array("css", $temas)) {
                          echo "checked = 'checked' ";
                      }
                ?> /> CSS   
                <input type='checkbox' name="temas[]" value ="seguridad"
                <?php
                      if (isset($temas) && in_array("seguridad", $temas)) {
                          echo "checked = 'checked' ";
                      }
                ?> /> Seguridad  
                <input type='checkbox' name="temas[]" value ="redes"
                <?php
                      if (isset($temas) && in_array("redes", $temas)) {
                          echo "checked = 'checked' ";
                      }
                ?> /> Redes  
                <input type='checkbox' name="temas[]" value ="php" 
                <?php
                      if (isset($temas) && in_array("php", $temas)) {
                          echo "checked = 'checked' ";
                      }
                ?> /> PHP<br />
                <span class='error'><?php if (isset($errores['temas'])) {
                           echo $errores['temas'];
                       }
                ?>  </span>
            </div>
            <div  >      
                <input type="submit" name='enviar' value="Enviar" />
            </div>


        </fieldset>

    </div>

</form>


<?php
      include "pie.php";
?>
