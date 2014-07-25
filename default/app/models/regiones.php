<?php 
class Regiones extends ActiveRecord{
  public function buscar(){
    return $this->find('order: nombre');
  }
}
?>