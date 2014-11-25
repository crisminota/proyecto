<?php


require_once '../vista/vistainicio.php';
require_once '../modelo/programaModel.php';

class vistainicio{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistaentra();
    }

    public function principal2(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new vistainicio(); 
 $programa->principal2();

?>