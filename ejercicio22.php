<?php

$frutas=array("Frutilla", "Pera","Manzana");

print_r($frutas);

echo $frutas[1];

for($indice=0; $indice<3;$indice++){

    echo "<br/>".$frutas[$indice];

}

$frutas=array( "F"=>"Frutilla","M"=>"Manzana","P"=>"Pera");

print_r($frutas);

echo "<br/>".$frutas['M']."<br/>";

foreach($frutas as $indice=>&$valor){

    //echo $frutas[$indice]."<br/>";

    echo $valor."Tiene el indice: ".$indice;

}

?>