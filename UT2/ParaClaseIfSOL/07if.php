<?php
    include "cabecera.php";

    $secreto = 89;
    $intento = rand(1, 100);
    echo "Su intento: ".$intento."<br />";
    $resultado = "El intento  es ";
    if ($intento < $secreto)
    {
        $resultado .= "<span class='aviso'>más bajo</span> que el nº secreto";
    }        
    else if ($intento > $secreto)
    {
         $resultado .= "<span class='aviso'>más alto</span> que el nº secreto";
    }       
    else
    {
         $resultado .= "<span class='aviso'>correcto</span>";
    }
       
    echo $resultado;
   // echo "<p> <a href=\"\" />Recargar</p> ";
    echo "<p> <a href='07if.php' >Recargar</a></p> ";
    include "pie.php";
?>
