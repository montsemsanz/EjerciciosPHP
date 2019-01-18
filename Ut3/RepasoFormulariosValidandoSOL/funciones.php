<?php
     /*
      * Muestra un array
      */
     function verArray($array)
     {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
     }
     
      /*
      * Recibe com parámetro un valor entre 1 y 12
      */
     function nombreDeMes($mes)
     {
        $nombres = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                        "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return $nombres[$mes - 1];
     }
?>
