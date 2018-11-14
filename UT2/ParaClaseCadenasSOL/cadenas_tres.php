<?php
    require_once "includes/cabecera.php";
    
    $texto = "<span class=\"texto\"> Texto</span> con etiquetas <strong>HTML</strong> ";
    echo $texto."<br />\n";
    
    echo "Aplicando htmlspecialchars()<br />";
    echo htmlspecialchars($texto)."<br />\n";
    
    echo "Aplicando strip_tags()<br />";
    echo strip_tags($texto)."<br />\n";
    
    echo "Sustituyendo la e por *<br />";
    echo str_replace('e', '*', $texto)."<br />\n";
    echo $texto."<br />\n";
    
    require_once "includes/pie.php";
?>
