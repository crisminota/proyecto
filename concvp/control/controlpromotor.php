<?php


require_once '../vista/vistapromotores.php';
require_once '../modelo/programaModel.php';

class controlpromotores{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistapromotores();
    }

    public function principal8(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controlpromotores(); 
 $programa->principal8();

?>