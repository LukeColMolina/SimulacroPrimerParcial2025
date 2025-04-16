<?php class persona{
private $pnombre;
private $papellido;
private $pdireccion;
private $mail;
private $telefono;

public function __construct($pnombre, $papellido, $pdireccion, $mail, $telefono) {
    $this->pnombre = $pnombre;
    $this->papellido = $papellido;
    $this->pdireccion = $pdireccion;
    $this->mail = $mail;
    $this->telefono = $telefono;
}

public function getNombre(){
    return $this->pnombre;
}
public function getApellido(){
    return $this->papellido;
} 
public function getPDireccion(){
    return $this->pdireccion;
}
public function getMail(){
    return $this->mail;
} 
public function getTelefono(){
    return $this->telefono;
} 

   public function setNombre(){
        return $this->pnombre;
    }
    public function setApellido(){
        return $this->papellido;
    } 
    public function setPDireccion(){
        return $this->pdireccion;
    }
    public function setMail(){
        return $this->mail;
    } 
    public function setTelefono(){
        return $this->telefono;
    } 


    public function __toString()
    {
        $cad = "Informacion del cliente. Nombre comlpeto:"
        .$this->getNombre()." ". $this->getApellido(). 
        ". Dirección: ". $this->getPDireccion()."Mail:" .$this->getMail().
        ". Teléfono::". $this->getTelefono();
        return $cad;
    
    }
}