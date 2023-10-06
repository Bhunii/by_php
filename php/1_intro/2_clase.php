<?php
// Una clase es un plantilla que dice como son los datos 
// Un objeto es el dato propiamente
class Aprendiz{
    // Propiedades o atributos de la clase
    public string $tipo_documento;
    public string $num_documento;
    public string $nombres;
    public string $apellidos;
    public string $correo;
    public float $edad;
    public int $peso;
    public bool $activo;

public function __construct($tipo_documento, 
    $num_documento, 
    $nombres, 
    $apellidos, 
    $correo, 
    $edad, 
    $peso, 
    $activo)
    {
        // Notacion ficha
        $this->tipo_documento= $tipo_documento;
        $this->num_documento= $num_documento;
        $this->nombres= $nombres;
        $this->apellidos= $apellidos;
        $this->correo= $correo;
        $this->edad= $edad;
        $this->peso= $peso;
        $this->activo= $activo;
    }
}
// Crear objeto de la clase aprendiz
$aprendiz1 = new Aprendiz ('CC', '1070000', 'LUISA', 'CORTES', 'luisacortez01@gmail.com', 25, 80, 1);
echo 'El aprendiz es: '. $aprendiz1->nombres,' con numero de documento ', $aprendiz1->num_documento;


?>