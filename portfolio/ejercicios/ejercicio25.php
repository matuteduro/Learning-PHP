<?php

class persona{

    public $nombre; // propiedades

    private $edad; // Solo se puede acceder desde la clase en la que se asigno

    protected $altura; // los accesos son protegidos, solo se accede desde la misma clase y hederadas

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

class trabajador extends persona{

    public $puesto; // propiedad nueva

    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }

}

$objTrabajador= new trabajador(); // new = crear nuevo objeto a partir de la definicion de la class

$objTrabajador->asignarNombre("Matias Duro"); // llamar un metodo

$objTrabajador->puesto="Asesor";

$objTrabajador->presentarseComoTrabajador();









?>