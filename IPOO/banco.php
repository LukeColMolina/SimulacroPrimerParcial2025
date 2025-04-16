<?php 
 include_once 'persona.php';
 class banco{
    private $numeroCuenta;
    private $objPersona;

    public function __construct($numeroCuenta,$objPersona)
    {
     $this->numeroCuenta = $numeroCuenta;
     $this->objPersona = $objPersona;   
    }
    public function getObjpersona(){
        return $this->objPersona;
    }
}