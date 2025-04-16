<?php include_once 'vuelo.php';
class aerolinea{
private $identificacion;
private $nombre;
private $colec_vuelos;
private $objVuelo;


public function __construct($identificacion, $nombre){
    $this->identificacion =$identificacion;
    $this->nombre =$nombre;
    $this->colec_vuelos = [];
}

public function getNombre(){
    return $this->nombre;
}
public function getIdentificacion(){
    return $this->identificacion;
} 
public function getColeccionVuelos($objVuelo){

    return $this->colec_vuelos[$objVuelo->getNumero()];
}



}