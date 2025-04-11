<?php
include_once 'cliente.php';
include_once 'motos.php';
$i = 0;
$coleccion = [];
class venta
{
    private $numero;
    private $fecha;
    private $preciofin;
    private $objClient;
    private $objMoto;

    public function __construct($numero, $fecha, $objClient, $objMoto, $preciofin)
    {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->objClient = $objClient;
        $this->$objMoto = $objMoto;
        $this->preciofin = $preciofin;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function getObjClient()
    {
        return $this->objClient;
    }
    public function getObjMoto()
    {
        return $this->objMoto;
    }
    public function getPrecioFin()
    {
        return $this->preciofin;
    }

    public function __toString()
    {
        $cad = "Informacion del cliente. numero comlpeto:"
            . $this->getNumero() . $this->getFecha() . ";Tipo y número de documento:" . $this->getObjClient() . $this->getObjMoto() .
            "; Estado de Servicio:" . $this->getPrecioFin();
        return $cad;
    }

    public function incorporarMoto($objMoto,$coleccion, $i){
        
        if ($this->getObjMoto()->getActiva() == true){
            $coleccion[$i] = $objMoto ;
            $i= $i + 1;
        };
        return $coleccion;
    }
}
