<?Php

class Clase{

    private string $variable;

    public function __construct($variable){
        $this->variable = $variable;
        echo 'Soy el constructor. Se ejecuta automaticamente<br>';
    }

    public function get_variable(){
        return $this->variable;
    }

    public function set_variable($variable){
        return $this->variable=$variable;
    }

    public function saludar(){
        echo '<br>Invocando un metodo PHP';
    }

}

// Declarar un objeto

$variable_hola = new Clase('Bloque numero 5, 20 x 20 cm');
$variable_hola2 = new Clase('Bloque numero 6, 15 x 15 cm');


?>