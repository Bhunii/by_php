<?php

require_once ('Computador.php');

class ComputadorDesktop extends Computador{

    private bool $ups;

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
        bool $ups){

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
            
            $this->ups=$ups;
    }

    //GET
    public function get_ups(){
        return $this->ups;
    }

    //SET
    public function set_ups($ups){
        $this->ups=$ups;
    }
}

?>