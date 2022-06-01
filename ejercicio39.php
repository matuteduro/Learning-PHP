<?php

$nombreArchivo="archivo.txt";

$contenidoArchivo=" Hola, saludos";

$archivoaCrear= fopen($nombreArchivo,"w");

fwrite($archivoaCrear, $contenidoArchivo);

fclose($archivoaCrear);
?>