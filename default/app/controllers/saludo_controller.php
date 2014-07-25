<?php 
class SaludoController extends AppController {
 
    //definimos un parametro en la acción al que llamamos $nombre
      public function hola($nombre) {
         $this->fecha = date("Y-m-d H:i");
         $this->nombre = $nombre;
         View::template(NULL);

      }
    public function index()
    {
        
    }
    //dice adios...
      public function adios() 
      {
         View::template(NULL);
      }
}
?>