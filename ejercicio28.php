<?php

//http://localhost/phpmyadmin/

$servidor="localhost"; // Es lo mismo que poner 127.0.0.1
$user="root";
$contrasenia="";

try{ // Si no sucede un error aqui

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $user,$contrasenia );
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg');";
    // Armado en phpmyadmin
    $conexion->exec($sql);

    echo "Conexion Establecida";

}catch(PDOException $error){ // continuar con esto, sino el error lo abosrbera el catch
    echo "Conexion Erronea".$error;
}

?>