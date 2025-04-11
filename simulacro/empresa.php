<?php 
include_once 'cliente.php';
include_once 'motos.php';
include_once 'venta.php';
class empresa{
    private $denominacion ;
    private $direccion;
    private $objCliente;
    private $objMoto;
    private $objVentas;

    public function __construct($denominacion, $direccion, $objMoto, $objVentas, $objCliente){
       $this->denominacion = $denominacion;
       $this->direccion = $direccion;
       $this->objMoto = $objMoto;
       $this->$objVentas = $objVentas; 
       $this->objCliente = $objCliente;
   }
   public function getDenominacion(){
       return $this->denominacion;
   }
   public function getdireccion(){
       return $this->direccion;
   } 
   public function getObjMoto(){
       return $this->objMoto;
   }
   public function getObjVentas(){
       return $this->objVentas;
   } 
   public function getObjCliente(){
       return $this->objCliente;
   } 

   public function __toString()
   {
       $cad = "Informacion del cliente. denominacion comlpeto:"
       .$this->getDenominacion(). $this->getdireccion(). ";Tipo y número de documento:". $this->getObjMoto(). $this->getObjVentas().
       "; Estado de Servicio:". $this->getObjCliente();
       return $cad;
   
   }
  public function retornarMoto($codigomoto, $objVentas ,$coleccion) {
    trim($codigomoto);
     $codigoretorno = $objVentas->incorporarMoto()->array_search($codigomoto,$coleccion);
     return $codigoretorno;
  }

}
 
   