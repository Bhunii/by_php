<?php

declare(strict_types=1);
//Crear superclase automotor
class Automotor{
    private string $marca;
    private string $modelo;
    private int $precio;
    
    public function __construct(string $marca, string $modelo, int $precio){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precio = $precio;
    }
    public function get_marca(){
        return $this->marca;
    }
    public function get_modelo(){
        return $this->modelo;
    }
    public function get_precio(){
        return $this->precio;
    }
    public function set_marca($marca){
        $this->marca = $marca;
    }
    public function set_modelo($modelo){
        $this->modelo = $modelo;
    }
    public function set_precio($precio){
        $this->precio = $precio;
    }
    public function saludar(){
        echo 'Bienvenido, desde la SUPERCLASE Automotor';
        echo '<br>'. 'Versión PHP: '. phpinfo();
    }
}

$automotor = new Automotor('DeLorean Motor Company', 'DMC DeLorean', 98000);
$automotor2 = new Automotor('Grupo Volkswagen', 'Audi R8', 257400);
$automotor3 = new Automotor('Chevrolet', ' Corvette c6', 48995);


echo 'Marca Automotor: '.$automotor->get_marca().'<br>';
echo 'Modelo Automotor: '.$automotor->get_modelo().'<br>';
echo 'Precio Automotor: '.$automotor->get_precio().' Dolares<br><br>';


?>