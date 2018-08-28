<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
        <title>Ejemplo 02</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    <body>
         <div id="contenido">
            <div id="cabecera">
                <h1>Ejercicios en PHP</h1>           
            </div> <!-- fin de cabecera -->
            <div id="principal">
                <h3>Mi segunda prueba en PHP</h3>
                <?php
                    echo "<p>Segundo ejemplo PHP</p>";
                    echo "<p>Esta es clase de Implantación de aplicaciones web </p>";
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
