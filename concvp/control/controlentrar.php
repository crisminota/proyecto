<?php


require_once '../vista/vistaentrar.php';
require_once '../modelo/programaModel.php';

class vistainicio{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistaent();
    }

    public function principal3(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new vistainicio(); 
 $programa->principal3();

?>