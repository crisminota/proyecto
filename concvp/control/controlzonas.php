<?php


require_once '../vista/vistazona.php';
require_once '../modelo/programaModel.php';

class controlzonas{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistazona();
    }

    public function principal6(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controlzonas(); 
 $programa->principal6();

?>