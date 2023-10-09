<?php

//recibir los datos enviados desde el formulario web

$num1 = $_POST['operador1'];
$num2 = $_POST['operador2'];

echo 'El operador 1 es:'.$num1;
echo '<br>El operador 2 es:'.$num2;

$operacion = $_POST['operacion'];

if ($operacion == "suma"){
    $resultado = $num1 + $num2;
    echo '<br> La suma de los operadores es: '.$resultado;
}

if ($operacion == "resta"){
    $resultado = $num1 - $num2;
    echo '<br> La resta de los operadores es: '.$resultado;
}

if ($operacion == "multiplicacion"){
    $resultado = $num1 * $num2;
    echo '<br> La multiplicacion de los operadores es: '.$resultado;
}

if ($operacion == "division"){
    if ($num2 > 0){
        $resultado = $num1 / $num2;
        echo '<br> La division de los operadores es: '.$resultado;       
    } elseif ($num2 <= 0){
        echo '<br> no se puede dividir por cero:';
    }
}



?>