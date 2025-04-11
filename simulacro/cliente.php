<?php class cliente{
     private $nombre ;
     private $apellido;
     private $alta;
     private $tipodoc;
     private $numbdoc;

     public function __construct($nombre, $apellido, $tipodoc, $numbdoc, $alta){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipodoc = $tipodoc;
        $this->$numbdoc = $numbdoc; 
        $this->alta = $alta;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    } 
    public function getTipodoc(){
        return $this->tipodoc;
    }
    public function getNumbDoc(){
        return $this->numbdoc;
    } 
    public function getAlta(){
        return $this->alta;
    } 
 
    public function __toString()
    {
        $cad = "Informacion del cliente. Nombre comlpeto:"
        .$this->getNombre(). $this->getApellido(). ";Tipo y número de documento:". $this->getTipodoc(). $this->getNumbDoc().
        "; Estado de Servicio:". $this->getAlta();
        return $cad;
    
    }
}