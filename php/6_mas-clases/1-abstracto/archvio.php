<?php

abstract class Figura{

    private int $nLados = 1;
    private string $nombre;

    public function __construct(int $nLados, string $nombre) {
        $this->nLados=$nLados;
        $this->nombre=$nombre;
    }

    public function Imprimir() {
        echo "Soy un metodo de una clase abstracta";
    }

}

// $cuadrado1 = new Cuadrado();

// $cuadrado1 -> Imprimir();

$triangulo = new Triangulo(3,"Triangulo",8,10);
$triangulo -> Imprimir();
echo '<br>'.$triangulo -> calcular_area();


class Cuadrado extends Figura{
    
    private float $longitud_lado;

    public function __construct(int $nLados, string $nombre, float $longitud_lado) {

        parent::__construct($nLados, $nombre);

        $this->longitud_lado=$longitud_lado;
    }
}


class Triangulo extends Figura{

    private float $base;
    private float $altura;

    public function __construct(int $nLados, string $nombre, float $base, float $altura) {

        parent::__construct($nLados, $nombre);

        $this->base=$base;
        $this->altura=$altura;
    }

    //GET
    public function get_base(){
        return $this->base;
    }
    public function get_altura(){
        return $this->altura;
    }

    //SET
    public function set_base(){
        $this->base=$base;
    }
    public function set_altura(){
        $this->altura=$altura;
    }

    public function calcular_area(){
        $resultado=($this->base*$this->altura)/2;
        return $resultado;
    }

}


class Circuferencia extends Figura{

    private float $radio;

    public function __construct(int $nLados, string $nombre, float $radio) {

        parent::__construct($nLados, $nombre);

        $this->radio=$radio;
    }
}

?>
