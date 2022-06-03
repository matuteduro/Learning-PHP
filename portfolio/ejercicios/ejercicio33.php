<?php

$jsonContenido='[
    {"nombre":"Matias", "apellido":"Duro"},
    {"nombre":"Valen", "apellido":"Duro"}]';

    $resultado= json_decode($jsonContenido);
    //print_r($resultado);

    foreach ($resultado as $persona){
      echo ($persona->nombre)." ".($persona->apellido)."<br/>";
    }

?>