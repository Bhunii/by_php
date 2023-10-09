<?php

require_once ('Automovil.php');
require_once ('Camion.php');

$automovil = new Automovil ('Ferrari','Testarossa 250', 40000000,'Carreras','Blaco');

// Subclase invocando metodos de la Superclase
echo 'Marca Automovil: '. $automovil->get_marca() .'<br>';
echo 'Modelo Automovil: '. $automovil->get_modelo() .'<br>';
echo 'Precio Automovil: '. $automovil->get_precio() .' Dolares<br>';

// Subclase invocando metodos de la Subclase
echo 'Tipo Automovil: '. $automovil->get_tipo() .'<br>';
echo 'Color Automovil: '. $automovil->get_color() .'<br><br>';


$camion = new Camion('Renault Trucks', '2021', 100000000, 6, 35,);

// Subclase invocando metodos de la Superclase
echo 'Marca Camion: '. $camion->get_marca() .'<br>';
echo 'Modelo Camion: '. $camion->get_modelo() .'<br>';
echo 'Precio Camion: '. $camion->get_precio() .'<br>';

// Subclase invocando metodos de la Subclase
echo 'Numero Ejes Camion: '. $camion->get_num_ejes() .'<br>';
echo 'Capacidad Carga Camion: '. $camion->get_capacidad_carga() .'<br><br>';
#$camion->saludar();