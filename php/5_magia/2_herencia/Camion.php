<?php

require_once('Automotor.php');

class Camion extends Automotor{
    
    //Atributos de la subclase Automovil
    private int $num_ejes;
    private float $capacidad_carga;
    
    //Creando constructor completo incluyendo los atributos propios y los de la Superclase Automotor
    public function __construct(string $marca, string $modelo, int $precio, int $num_ejes, float $capacidad_carga) {
        
        //Invocando el contructor de la Superclase para acceder a sus datos
        parent::__construct($marca, $modelo, $precio);
        
        //Declarando el destino de los atributos de la subclase Automovil
        $this->num_ejes = $num_ejes;
        $this->capacidad_carga = $capacidad_carga;
    }
    //Los métodos SET se usan para asignar valores a los atributos
    public function set_num_ejes($num_ejes){
        $this->num_ejes=$num_ejes;
    }
    public function set_capacidad_carga($capacidad_carga){
        $this->capacidad_carga=$capacidad_carga;
    }
    //Con el método GET se devuelven o recuperan los datos de los aributos
    public function get_num_ejes(){
        return $this->num_ejes;
    }
    public function get_capacidad_carga(){
        return $this->capacidad_carga;
    }

}

?>