<?php
trait mensajes{
  public function imprimir_mensaje() {
    echo "El señor de la nochee "; 
  }
}

class Welcome {
  use mensajes;
}

$obj = new Welcome();
$obj->imprimir_mensaje();
?>