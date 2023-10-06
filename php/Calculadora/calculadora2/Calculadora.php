<?php

//declare(strict_types=1);
class Calculadora{

    private int $operando1;
    private int $operando2;
    private string $operacion;

    public function __construct(){
    }

    public function get_operando1(){
        return $this->operando1;
    }

    public function set_operando1(int $operando1){
        if(!empty($operando1) && is_numeric($operando1)){
        $this->operando1 = $operando1;}
    }

    public function get_operando2(){
        return $this->operando2;
    }

    public function set_operando2(int $operando2){
        if(!empty($operando2) && is_numeric($operando2)){
        $this->operando2 = $operando2;}
    }

    public function get_operacion(){
        return $this->operacion;
    }

    public function sumar(int $operando1, int $operando2){
            $resultado = $operando1 + $operando2;
            return $resultado;
    }       
    
    // public function restar(int $operando1, int $operando2){
    //         $resultado = $operando1 - $operando2;
    //         return $resultado;
    // }

    // public function multiplicar(int $operando1 = 0, int $operando2 = 0, $operacion){
    //     if ($operacion == "multiplicacion"){
    //         return $operando1 * $operando2;
    //     }
    // }


    function restar($operando1, $operando2){
        $resultado = $operando1 - $operando2;
        return $resultado;
    }

    function multiplicar(int $operando1 = 0, int $operando2 = 0, $operacion){
        if ($operacion == "multiplicacion"){
            return $operando1 * $operando2;
        }
    }

    public function validar($operando1, $operando2, $operacion){
        if ($operacion == "suma"){
            echo sumar($operando1, $operando2);
        } elseif ($operacion == "resta"){
            echo restar($operando1, $operando2);
        }
    }

    // public function dividir(int $operando1 = 0, int $operando2 = 0){
    //     if ($operando2 != 0) {
    //     return $operando1 / $operando2;
    //     }
    //     else {
    //     echo 'No es posible dividir por cero';
    //     return;
    //     }
    // }
}

$num1 = $_POST['operador1'];
$num2 = $_POST['operador2'];
$operacion = $_POST['operacion'];

$nuevo = new Calculadora($num1, $num2, $operacion);

$nuevo->validar($operacion);



?>