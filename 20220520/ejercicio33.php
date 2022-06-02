<?php

$jsonContenido='[
    {"nombre":"Oscar","apellido":"Uh"},    
    {"nombre":"Jose","apellido":"Perez"}
    ]';
    

    $resultado= json_decode($jsonContenido);

    foreach ($resultado as $persona) {
       echo ($persona->Nombre)."".($persona->$apellido)."<br/>";
    }

    



?>