<?php

class Televisor{

    private string $marca;
    private string $pulgadas;
    private int $precio;
    private bool $internet;

    public function __construct($marca, $pulgadas, $precio, $internet){
        $this->marca = $marca;
        $this->pulgadas = $pulgadas;
        $this->precio = $precio;
        $this->internet = $internet;
    }

    public function set_marca($marca){
        $this->marca=$marca;
    }

    public function set_pulgadas($pulgadas){
        $this->pulgadas=$pulgadas;
    }

    public function set_precio($precio){
        $this->precio=$precio;
    }

    public function set_internet($internet){
        $this->internet=$internet;
    }

    public function get_marca(){
        return $this->marca;
    }

    public function get_pulgadas(){
        return $this->pulgadas;
    }

    public function get_precio(){
        return $this->precio;
    }

    public function get_internet(){
        return $this->internet;
    }
}

function get_fecha_hora(){
    $fecha_actual = date ("d m Y  H:i:s");
    return $fecha_actual;
}


$televisor1 = new Televisor('LG', '50', 2099900, 1); 
$televisor2 = new Televisor('SAMSUNG', '58', 3999900, 0); 
$televisor3 = new Televisor('CAIXUN', '43', 1799900, 1); 
$televisor4 = new Televisor('CAIXUN', '32', 1299900, 1); 
$televisor5 = new Televisor('HISENSE', '43', 2599900, 1);

$televisor3->set_precio(1199900);

echo 'TV '.$televisor1->get_marca() . ' de ' . $televisor1->get_pulgadas() . ' pulgadas con un precio de ' . $televisor1->get_precio();
echo '<br>TV '.$televisor2->get_marca() . ' de ' . $televisor2->get_pulgadas() . ' pulgadas con un precio de ' . $televisor2->get_precio();
echo '<br>TV '.$televisor3->get_marca() . ' de ' . $televisor3->get_pulgadas() . ' pulgadas con un precio de ' . $televisor3->get_precio();
echo '<br>TV '.$televisor4->get_marca() . ' de ' . $televisor4->get_pulgadas() . ' pulgadas con un precio de ' . $televisor4->get_precio();
echo '<br>TV '.$televisor5->get_marca() . ' de ' . $televisor5->get_pulgadas() . ' pulgadas con un precio de ' . $televisor5->get_precio();

echo '<br>'. get_fecha_hora();

?>