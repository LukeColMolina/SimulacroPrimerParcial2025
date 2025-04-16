<?php 
class aeropuerto{
    private $denominacion;
    private $direccion;
    private $colec_aerolinea;
    private $objAerolinea;

public function __construct($denominacion,$direccion)
{
    $this->denominacion =$denominacion;
    $this->direccion =$direccion;
    $this->colec_aerolinea = [];
}

public function getDireccion(){
    return $this->direccion;
}
public function getDenominacion(){
    return $this->denominacion;
} 
  public function getColeccionAerolineas($objAerolinea){

        return $this->colec_aerolinea[$objAerolinea->getNombre()];
    }


public function __toString()
{
$cad= "Denominación del Aeropuerto:". $this->getDenominacion() ."/n";
$cad =$cad. "Dirección del Aeropuerto:". $this->getDireccion()."/n";
$cad =$cad. "Colección de Aerolineas:". $this->getColeccionAerolineas($this) ."/n";
return $cad ;
}



}