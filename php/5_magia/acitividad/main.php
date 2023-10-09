<?php

require_once ('ComputadorLaptop.php');
require_once ('ComputadorDesktop.php');

// Objcto de la subclase ComputadorLaptop
$laptop = new ComputadorLaptop('Lenovo','DDR5',8,'SSD',512,
    'Windows 11 Home','Microsoft Office','12th Generation Intel Core i5',2,0,45);

echo 'Fabricante Laptop: '.$laptop->get_fabricante().'<br>';
echo 'Potencia Bateria Laptop: '.$laptop->get_potencia_bateria().' WH<br><br>';


// Objeto de la subclase ComputadorDesktop
$desktop = new ComputadorDesktop('HP','DDR4',8,'SSD',256,
    'Windows 11 Home','----',' AMD Ryzen 3 5300U',3,0);

    echo 'Fabricante Laptop: '.$desktop->get_fabricante().'<br>';
    echo 'Potencia Bateria Laptop: '.$desktop->get_ups().'<br><br>';

//metodos estaticos
Computador::estatico_fecha_hora_actual();
Computador::estatico_contar();
?>