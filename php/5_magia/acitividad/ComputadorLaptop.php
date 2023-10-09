<?php

require_once ('Computador.php');

class ComputadorLaptop extends Computador{

    private bool $tactil;
    private int $potencia_bateria;

    public function __construct(
        string $fabricante,
        string $tipo_memoria,
        int $capacidad_memoria,
        string $tipo_almacenamiento,
        int $capacidad_almacenamiento,
        string $sistema_operativo,
        string $suite_oficina,
        string $procesador,
        int $num_puertos_usb,
        bool $tactil,
        int $potencia_bateria){

            parent::__construct(
            $fabricante,
            $tipo_memoria,
            $capacidad_memoria,   
            $tipo_almacenamiento,
            $capacidad_almacenamiento,
            $sistema_operativo,
            $suite_oficina,
            $procesador,
            $num_puertos_usb);
            
            $this->tactil=$tactil;
            $this->potencia_bateria=$potencia_bateria;
    }

    //GET
    public function get_tactil(){
        return $this->tactil;
    }
    public function get_potencia_bateria(){
        return $this->potencia_bateria;
    }

    //SET
    public function set_tactil($tactil){
        $this->tactil=$tactil;
    }
    public function set_potencia_bateria($potencia_bateria){
        $this->potencia_bateria=$potencia_bateria;
    }

}