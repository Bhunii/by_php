<?php

declare(strict_types=1);

class Computador{

    private string $fabricante;
    private string $tipo_memoria;
    private int $capacidad_memoria;   
    private string $tipo_almacenamiento;
    private int $capacidad_almacenamiento;
    private string $sistema_operativo;
    private string $suite_oficina;
    private string $procesador;
    private int $num_puertos_usb;
    public static int $contador = 0;

    public function __construct(
        string $fabricante,
        string $tipo_memoria,
        int $capacidad_memoria,
        string $tipo_almacenamiento,
        int $capacidad_almacenamiento,
        string $sistema_operativo,
        string $suite_oficina,
        string $procesador,
        int $num_puertos_usb)

        {
            $this->fabricante = $fabricante;
            $this->tipo_memoria = $tipo_memoria;
            $this->capacidad_memoria = $capacidad_memoria;
            $this->tipo_almacenamiento = $tipo_almacenamiento;
            $this->capacidad_almacenamiento = $capacidad_almacenamiento;
            $this->sistema_operativo = $sistema_operativo;
            $this->suite_oficina = $suite_oficina;
            $this->procesador = $procesador;
            $this->num_puertos_usb = $num_puertos_usb;
        }

    //GET
    public function get_fabricante(){
        return $this->fabricante;
    }
    public function get_tipo_memoria(){
        return $this->tipo_memoria;
    }
    public function get_capacidad_memoria(){
        return $this->capacidad_memoria;
    }
    public function get_tipo_almacenamiento(){
        return $this->tipo_almacenamiento;
    }
    public function get_capacidad_almacenamiento(){
        return $this->capacidad_almacenamiento;
    }
    public function get_sistema_operativo(){
        return $this->sistema_operativo;
    }
    public function get_suite_oficina(){
        return $this->suite_oficina;
    }
    public function get_procesador(){
        return $this->procesador;
    }
    public function get_num_puertos_usb(){
        return $this->num_puertos_usb;
    }

    //SET
    public function set_fabricante($fabricante){
        $this->fabricante=$fabricante;
    }
    public function set_tipo_memoria($tipo_memoria){
        $this->tipo_memoria=$tipo_memoria;
    }
    public function set_capacidad_memoria($capacidad_memoria){
        $this->capacidad_memoria=$capacidad_memoria;
    }
    public function set_tipo_almacenamiento($tipo_almacenamiento){
        $this->tipo_almacenamiento=$tipo_almacenamiento;
    }
    public function set_capacidad_almacenamiento($capacidad_almacenamiento){
        $this->capacidad_almacenamiento=$capacidad_almacenamiento;
    }
    public function set_sistema_operativo($sistema_operativo){
        $this->sistema_operativo=$sistema_operativo;
    }
    public function set_suite_oficina($suite_oficina){
        $this->suite_oficina=$suite_oficina;
    }
    public function set_procesador($procesador){
        $this->procesador=$procesador;
    }
    public function set_num_puertos_usb($num_puertos_usb){
        $this->num_puertos_usb=$num_puertos_usb;
    }

    //Metodos estaticos
    public static function estatico_fecha_hora_actual(){
        echo '<br>'.$fecha_actual = date ("d m Y  H:i:s").'<br>';
        return;
    }
    public static function estatico_contar(){
        echo 'Conteo: '. self::$contador+=1;
        return;
    }
}