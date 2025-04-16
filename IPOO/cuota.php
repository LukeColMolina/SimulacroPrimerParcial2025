<?php
class cuota {
private $numero;
private $monto_cuota;
private $monto_interes;
private $cancelada;

public function __construct($numero, $monto_cuota, $monto_interes, $cancelada){
    $this->numero = $numero;
    $this->monto_cuota = $monto_cuota;
    $this->monto_interes = $monto_interes;
    $this->cancelada = $cancelada;
}
public function getMontoFinalCuota($monto_cuota, $monto_interes)
{
    $montoFinalCuota =  $monto_cuota +$monto_interes  ;
    return $montoFinalCuota;
}





}