<?php class motos
{
   private $codigo;
   private $costo;
   private $anio;
   private $descripcion;
   private $porcentaje;
   private $activa;

   public function __construct($codigo, $costo, $anio, $descripcion, $porcentaje, $activa)
   {
      $this->codigo = $codigo;
      $this->costo = $costo;
      $this->anio = $anio;
      $this->descripcion = $descripcion;
      $this->porcentaje = $porcentaje;
      $this->activa = $activa;
   }
   public function getCodigo()
   {
      return $this->codigo;
   }
   public function getCosto()
   {
      return $this->costo;
   }
   public function getDescripcion()
   {
      return $this->descripcion;
   }
   public function getPorcentaje()
   {
      return $this->porcentaje;
   }
   public function getAnio()
   {
      return $this->anio;
   }

   public function getActiva()
   {
      return $this->activa;
   }

   public function darPrecioVenta($activa, $anio, $porcentaje, $costo)
   {
      if ($activa == true) {
         $_venta = $costo + $costo * ($anio * $porcentaje);
      } else {
         $_venta = 0;
      }
      return $_venta;
   }
   public function __toString()
   {
      $cad = "Codigo:"
         . $this->getCodigo() . "Costo" . $this->getCosto() .
         "Año de fabriacacion:" . $this->getAnio() . "Descripcion" . $this->getDescripcion() . "Porcentaje:" . $this->getPorcentaje() .
         "; Estado de Servicio:" . $this->getActiva();
      return $cad;
   }
}
// código, costo, año fabricación, descripción, porcentajeincremento anual, activa
