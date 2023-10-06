<?php

class Docente{

    private string $tipo_documento;
    private string $num_documento;


    public function __construct($tipo_documento, $num_documento){
        $this->tipo_documento = $tipo_documento;
        $this->num_documento = $num_documento;
    }

    // Creamos funciones GET traer datos
    public function get_tipo_documento(){
        return $this->tipo_documento;
    }

    public function get_num_documento(){
        return $this->num_documento;
    }

    // Creamos funciones SET asignar los datos
    public function set_tipo_documento($tipo_documento){
        $this->tipo_documento = $tipo_documento;
    }

    public function set_num_documento($num_documento){
        $this->num_documento = $num_documento;
    }


}

// Se crea un objeto o intancia
$docente1 = new Docente('CC', '3075654156');
$docente2 = new Docente('CC', '5641213214');
$docente3 = new Docente('CE', '5465416521');
$docente4 = new Docente('CE', '9416523121');
$docente5 = new Docente('PB', '1564654631');

$docente1->set_tipo_documento('PB');
echo 'El docente ---- identificado con '. $docente1->get_tipo_documento() . ' y numero '. $docente1->get_num_documento();
echo '<br>'.'El docente ---- identificado con '. $docente2->get_tipo_documento() . ' y numero '. $docente2->get_num_documento();
echo '<br>'.'El docente ---- identificado con '. $docente3->get_tipo_documento() . ' y numero '. $docente3->get_num_documento();

