<?php


require_once '../vista/vistausuarios.php';
require_once '../modelo/programaModel.php';

class controlusuarios{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistausuarios();
    }

    public function principal7(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controlusuarios(); 
 $programa->principal7();

?>