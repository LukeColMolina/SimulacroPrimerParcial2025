<?php
include_once 'persona.php';
class vuelo{
private $numero;
private $importe;
private $fecha;
private $destino;
private $harribo;
private $hpartida;
private $cant_asientos;
private $cant_disp;
private $objPersona;


public function __construct($numero, $importe, $fecha, $destino, $harribo, $hpartida, $cant_asientos, $cant_disp, $objPersona) {
    $this->numero = $numero;
    $this->importe = $importe;
    $this->fecha = $fecha;
    $this->destino = $destino;
    $this->harribo = $harribo;
    $this->hpartida = $hpartida;
    $this->cant_asientos = $cant_asientos;
    $this->cant_disp = $cant_disp;
    $this->objPersona = $objPersona;
}

public function getNumero(){
    return $this->numero;
}
public function getApellido(){
    return $this->importe;
} 
public function getfecha(){
    return $this->fecha;
}
public function getdestino(){
    return $this->destino;
} 
public function getHoraArribo(){
    return $this->harribo;
} 
public function getHoraPartida(){
    return $this->hpartida;
} 
public function getCantidadAsientosTotal(){
    return $this->cant_asientos;
} 
public function getCantidadDisponible(){
    return $this->cant_disp;
} 
public function getObjPersona(){
    return $this->objPersona;
}

public function getcantidadPasajeros($objPersona)
{foreach ($objPersona as $this->objPersona){
 $cant_pasajeros = count($this->objPersona);
 return $cant_pasajeros;
}}

public function asignarAsientosDisponlibes($cant_pasajeros)
{
    $respuesta = false;
    $cant_disp = $this->getCantidadDisponible();
    if ($cant_pasajeros <= $cant_disp){
        $respuesta = true;
    }
    return $respuesta;
}
public function setNumero(){
       ;
    }
    public function setApellido(){
        ;
    } 
    public function setfecha(){
       ;
    }
    public function setdestino(){
        ;
    } 
    public function setharribo(){
       ;
    } 


    public function __toString()
    {
        $cad = "Informacion del cliente. Numero comlpeto:"
        .$this->getNumero()." ". $this->getApellido(). 
        ". Dirección: ". $this->getfecha()."destino:" .$this->getdestino().
        ". Teléfono::". $this->getHoraArribo();
        return $cad;
    
    }

}

