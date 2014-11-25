<?php


require_once '../vista/vistamenuPrincipal.php';
require_once '../modelo/programaModel.php';

class controlmenuprincipal{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistamenuPrincipal();
    }

    public function principal4(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controlmenuprincipal(); 
 $programa->principal4();

?>