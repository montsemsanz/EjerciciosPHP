<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Probando con JavaScript</title>
         <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    </head>
    <body>
        <div id="contenido">
            <div id="cabecera">
                <h1>Ejercicios en PHP</h1>           
            </div> <!-- fin de cabecera -->
            <div id="principal">
                <h3>Probando Javascript ...</h3>
                <script type="text/javascript">
                    var nombre;
                    nombre = "Pepe";
                    document.write(nombre);
                    document.write("<br />");
                    nombre = "Juan";
                    document.write(nombre);
                </script>
                <p>Ejemplo de script de cliente y script de servidor.</p>
            </div>     <!-- fin de principal-->
            <div id="pie">
                <p class="copyright">
                    &copy; <?php echo date("Y"); ?> Ejercicios iniciales de PHP
                </p>
            </div>
        </div><!-- fin de contenido -->


    </body>
</html>
