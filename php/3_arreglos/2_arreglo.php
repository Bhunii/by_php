<?php

$array = [
    'ropa' => 'camiseta',
    'talla' => 'L',
    'color' => 'azul',
];

extract($array);
echo'Una '. $ropa.' de talla '.$talla.' de un color '. $color;

?>