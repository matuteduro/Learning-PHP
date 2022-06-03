<?php

class conexion{

    private $servidor="localhost";
    private $user="root";
    private $password="";
    private $connect;

    public function __construct(){

        try {
            $this->connect= new PDO("mysql:host=$this->servidor;dbname=album", $this->usuario, $this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch (PDOException $e){
            return "falla de conexion".$e;

        }
        
    }

    public function ejecutar ($sql){
        $this->connect->exec($sql);
        return $this->connect->lastInsertId();

    }
}

?>