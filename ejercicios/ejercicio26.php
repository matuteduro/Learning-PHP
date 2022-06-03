<?php

class persona{

    public $nombre; // propiedades

    private $edad; // Solo se puede acceder desde la clase en la que se asigno

    protected $altura; // los accesos son protegidos, solo se accede desde la misma clase y hederadas

    function __construct($nuevoNombre){ // como funciona el constructor
        $this->nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ // acciones o metodos

        $this->nombre=$nuevoNombre; 
    }
    public function imprimirNombre(){

        echo "Hola Soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=26;
        return $this->edad;
    }
}

$objAlumno= new persona("Matias Duro"); // new = crear nuevo objeto a partir de la definicion de la class

//$objAlumno->asignarNombre("Matias"); // llamar un metodo

$objAlumno->imprimirNombre(); // llamar un metodo





?>