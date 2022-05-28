<?php

//http://localhost/phpmyadmin/

$servidor="localhost"; // Es lo mismo que poner 127.0.0.1
$user="root";
$contrasenia="";

try{ // Si no sucede un error aqui

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $user,$contrasenia );
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // Leer la base de datos con php

    $sql="SELECT * FROM `fotos`";
    
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    //print_r($resultado); // 1 forma de imprimirlo

    foreach($resultado as $foto){ // va a mostrar todo el resultado como 1 foto
        echo $foto['nombre']."<br/>"; // [aqui dentro que quiero que se muestre]
    }

    echo "Conexion Establecida";

}catch(PDOException $error){ // continuar con esto, sino el error lo abosrbera el catch
    echo "Conexion Erronea".$error;
}

?>