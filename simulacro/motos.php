<?php class motos {
private $codigo ;
private $costo;
private $anio;
private $descripcion;
private $porcentaje;
private $activa;

public function __construct($codigo, $costo, $anio, $descripcion, $porcentaje, $activa){
   $this->codigo = $codigo;
   $this->costo = $costo;
   $this->anio = $anio;
   $this->descripcion = $descripcion;
   $this->porcentaje = $porcentaje; 
   $this->activa = $activa;
}
public function getcodigo(){
   return $this->codigo;
}
public function getcosto(){
   return $this->costo;
} 
public function getdescripcion(){
   return $this->descripcion;
}
public function getporcentaje(){
   return $this->porcentaje;
} 
public function getAnio(){
   return $this->anio;
} 

public function getActiva(){
    return $this->activa;
} 

public function __toString()
    {
        $cad = "Codigo:"
        .$this->getcodigo(). $this->getcosto(). 
        "Año de fabriacacion:". $this->getAnio(). $this->getporcentaje().
        "; Estado de Servicio:". $this->getActiva();
        return $cad;
    
    }
}
// código, costo, año fabricación, descripción, porcentajeincremento anual, activa

