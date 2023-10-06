<?php

class EntidadBancaria{

    private string $nombre;
    private string $pais;
    private string $sede_principal;
    private int $num_activos;

    public function __construct($nombre, $pais, $sede_principal, $num_activos){
        $this->nombre = $nombre;
        $this->pais = $pais;
        $this->sede_principal = $sede_principal;
        $this->num_activos = $num_activos;
    }

    public function set_nombre($nombre){
        $this->nombre=$nombre;
    }

    public function set_pais($pais){
        $this->pais=$pais;
    }

    public function set_sede_principal($sede_principal){
        $this->sede_principal=$sede_principal;
    }

    public function set_num_activos($num_activos){
        $this->num_activos=$num_activos;
    }

    public function get_nombre(){
        return $this->nombre;
    }

    public function get_pais(){
        return $this->pais;
    }

    public function get_sede_principal(){
        return $this->sede_principal;
    }

    public function get_num_activos(){
        return $this->num_activos;
    }
}

$entidad_bancaria1 = new EntidadBancaria ('BANCOLOMBIA', 'COLOMBIA', 'MEDELLIN', 71000);
$entidad_bancaria2 = new EntidadBancaria ('BANCO DE BOGOTA', 'COLOMBIA', 'BOGOTA', 27324);
$entidad_bancaria3 = new EntidadBancaria ('DAVIVIENDA', 'COLOMBIA', 'BOGOTA', 27106);
$entidad_bancaria4 = new EntidadBancaria ('BBVA', 'COLOMBIA', 'BOGOTA', 18688);
$entidad_bancaria5 = new EntidadBancaria ('BANCO DE OCCIDENTE', 'COLOMBIA', 'CALI', 10810);

echo 'La entidad bancaria de '. $entidad_bancaria1->get_nombre() .' tiene un total de activos de '. $entidad_bancaria1->get_num_activos();
echo '<br> La entidad bancaria de '. $entidad_bancaria2->get_nombre() .' tiene un total de activos de '. $entidad_bancaria2->get_num_activos();
echo '<br>'.'La entidad bancaria de '. $entidad_bancaria3->get_nombre() .' tiene un total de activos de '. $entidad_bancaria3->get_num_activos();
echo '<br>'.'La entidad bancaria de '. $entidad_bancaria4->get_nombre() .' tiene un total de activos de '. $entidad_bancaria4->get_num_activos();
echo '<br>'.'La entidad bancaria de '. $entidad_bancaria5->get_nombre() .' tiene un total de activos de '. $entidad_bancaria5->get_num_activos();

?>