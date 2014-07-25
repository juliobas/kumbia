<?php
/**
 * Carga de Modelos
 */
Load::models('regiones','comunas','ciudades');
class ClientesController extends ApplicationController{
	public function index() {
 
	}
	public function create(){
		$regiones = new Regiones();
		$this->regiones = $regiones->buscar();
		if($this->has_post('clientes')){
			//SUBMIT
		}
	}
	public function getComunas(){
		$this->set_response('view');
		$comunas = new Comunas();
		$this->comunas = $comunas->buscar($this->post('regiones_id'));
	}
 
	public function getCiudades(){
		$this->set_response('view');
		$ciudades = new Ciudades();
		$this->ciudades = $ciudades->buscar($this->post('comunas_id'));
	}
}
?>