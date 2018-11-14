<?php
    // fichero con funciones de ayuda (helpers)
    function verArray($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    
      // dado un código de asignatura devuelve su nombre completo
    function nombreCompletoDe($asig)
    {
         $asignaturas = ["AWEB"=>"IMPLANTACIÓN DE APLICACIONES WEB", "SERI"=>"SERVICIOS DE RED E INTERNET",
                    "IMSO"=>"IMPLANTACIÓN DE SISTEMAS OPERATIVOS","FOL"=>"FORMACIÓN Y ORIENTACIÓN LABORAL",
                    "SEAD"=>"SEGURIDAD Y ALTA DISPONIBILIDAD"];
         return $asignaturas[$asig];
    }
    
      // dado un nombre de barrio de Pamplona devuelve su código postal
    function queCodigoPostalTiene($barrio)
    {
         $barrios = ["ROCHAPEA"=>31014, "SAN JUAN"=>"31011",
                    "CHANTREA"=>"31015","ITURRAMA"=>"31007",
                    "BUZTINTXURI"=>"31012", "MENDILLORRI"=>"31016"];
         return $barrios[$barrio];
    }
?>
