<?php

//declare(strict_types=1);
class Calculadora{

    private int $operando1;
    private int $operando2;
    private string $operacion;

    public function __construct(){
        $this->operando1=$operando1;
        $this->operando2=$operando2;
        $this->operacion=$operacion;
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

    function multiplicar(int $operando1, int $operando2){
        $resultado = $operando1 - $operando2;
            return $operando1 * $operando2;
    }

    public function validar(){
        $operando1 = $this->get_operando1();
        $operando2 = $this->get_operando2();
        $operacion = $this->get_operacion();
        if ($operacion == "suma"){
            echo $this->sumar($operando1, $operando2);
        } elseif ($operacion == "resta"){
            echo $this->restar($operando1, $operando2);
        } elseif ($operacion == "multiplicacion"){
            echo $this->multiplicar($operando1, $operando2);
        }

    }

}

$num1 = $_POST['operador1'];
$num2 = $_POST['operador2'];
$operacion = $_POST['operacion'];

$nuevo = new Calculadora($num1, $num2, $operacion);

$nuevo->validar();



?>