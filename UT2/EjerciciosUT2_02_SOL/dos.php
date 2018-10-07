<?php
    include "cabecera.php";
    echo "  <h3>Factura de la luz</h3><hr />";
    define ("COSTE_KW", 0.11473);
    define ("IVA", 16);
    
    $consumo = 22;
    $totalSinIva = $consumo * COSTE_KW;
    $iva = $totalSinIva * IVA / 100;
    $total = $totalSinIva + $iva;
    
    echo "<table><caption>Factura Luz</caption>\n";
    echo "<tr><td>Consumo</td><td> " . $consumo. " KW</td></tr>\n";
    echo "<tr><td>Precio KW</td><td> " .COSTE_KW . "&euro;</td></tr>\n";
    echo "<tr><td>Total sin IVA</td><td> " . number_format($totalSinIva, 2) . " &euro;</td></tr>\n";
    echo "<tr><td>IVA (16 %)</td><td>".number_format($iva, 2)." &euro;</td></tr>\n";
    echo "<tr><td>Total factura</td><td> " . number_format($total, 2) . " &euro;</td></tr>\n";
    echo "</table>\n";

    include "pie.php";          
               
?>