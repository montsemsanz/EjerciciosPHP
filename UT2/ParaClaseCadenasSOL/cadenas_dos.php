<?php
    require_once "includes/cabecera.php";
    
    
    $frase = "  Ejemplo de cadenas  ";
    $palabras = explode(" ", $frase);
   //echo "<pre>"; print_r($palabras);  echo "<pre/>";
   $numeroPalabras = 0;
   foreach ($palabras as $pal)
   {
       if (!empty($pal))
           $numeroPalabras ++;
   }
   echo "<p>Palabras en la frase $frase - $numeroPalabras </p>\n"; 
   
   // Palabras que empizan por un determinado carácter
   $car = 'E';
   $numeroPalabras = 0;
   foreach ($palabras as $pal)
   {
       if (!empty($pal) && substr($pal, 0, 1) == $car)
           $numeroPalabras ++;
   }
   echo "<p>Palabras en la frase $frase que empiezan por $car - $numeroPalabras </p>\n";   
    
    require_once "includes/pie.php";
?>
