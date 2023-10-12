<?php

$multiplo = function(int $numero, int $multiplo){

    if ($numero % $multiplo == 0){
        printf('El numero '. $numero.' es multiplo de '.$multiplo);
    } elseif (($numero % $multiplo) != 0){
        printf('El numero '. $numero.' no es multiplo de '.$multiplo);
    }
};

$multiplo(20,5);

?>