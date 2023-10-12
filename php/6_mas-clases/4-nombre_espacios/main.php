<?php

require ('Clase1.php');
$persona1 = new Abc\Persona('LILIANA MINA','Minalili@gmail.com','Hola, Buenos dias....');
echo 'Imprimiendo datos de la clase Persona en el espacio de nombre Abc'.'<br>';
echo 'Nombre: '.$persona1->nombre.'<br>';
echo 'Correo: '.$persona1->correo.'<br>';
echo 'Saludo: '.Abc\Persona::$saludo.'<br>';

echo '<br>';

require('Clase2.php');
$persona1 = new Sena\Persona('LILIANA MINA','Minalili@gmail.com','Hola, Buenos dias....');
echo 'Imprimiendo datos de la clase Persona en el espacio de nombre Sena'.'<br>';
echo 'Nombre: '.$persona1->nombre.'<br>';
echo 'Correo: '.$persona1->correo.'<br>';
echo 'Saludo: '.Sena\Persona::$saludo.'<br>';

?>