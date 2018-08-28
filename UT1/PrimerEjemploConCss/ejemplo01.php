<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo 01</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    <body>
        <div id="contenido">
            <div id="cabecera">
                <h1>Ejercicios en PHP</h1>           
            </div> <!-- fin de cabecera -->
            <div id="principal">
                <h3>Mi primera prueba en PHP</h3>
                <?php
                      echo "<p>Primer ejemplo PHP</p>";
                      echo "<p>Hoy es " .date('l, d M Y') . "</p>";                      
                ?>

            </div>     <!-- fin de principal-->
            <div id="pie">
                <p class="copyright">
                    &copy; <?php echo date("Y"); ?> Ejercicios iniciales de PHP
                </p>
            </div>
        </div><!-- fin de contenido -->   
    </body>
</html>
