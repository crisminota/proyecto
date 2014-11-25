<?php


require_once '../vista/vistaplazos.php';
require_once '../modelo/programaModel.php';

class controlplazos{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistaplazos();
    }

    public function principal5(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controlplazos(); 
 $programa->principal5();

?>