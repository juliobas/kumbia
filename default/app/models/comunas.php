<?php 
class Comunas extends ActiveRecord{
  public function buscar($regiones_id){
    return $this->find("regiones_id = $regiones_id", 'order: nombre');
  }
}
?>