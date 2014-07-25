<?php 
class Ciudades extends ActiveRecord{
  public function buscar($comunas_id){
    return $this->find("comunas_id = $comunas_id", 'order: nombre');
  }
}
?>