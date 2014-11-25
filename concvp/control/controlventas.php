<?php


require_once '../vista/ventas.php';
require_once '../modelo/programaModel.php';

class controlventas{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistaventas ;
    }

    public function principal6(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controlventas(); 
 $programa->principal6();

?>