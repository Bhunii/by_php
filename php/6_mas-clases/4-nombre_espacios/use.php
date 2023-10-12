<?php
// Aplicando un ALIAS al namespace con la palabra reservada 'use'

require ('Clase2.php');

use Sena as S;
$persona1 = new S\Persona('LUIS GARZON','garzon@gmail.com','Hola, Buenos dias....');
echo 'Imprimiendo datos de la clase Persona en el espacio de nombre Sena'.'<br>';
echo 'Nombre: '.$persona1->nombre.'<br>';
echo 'Correo: '.$persona1->correo.'<br>';
echo 'Saludo: '.S\Persona::$saludo.'<br>';


?>