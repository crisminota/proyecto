<?php


require_once '../vista/vistaproducto.php';
require_once '../modelo/programaModel.php';

class controlproducto{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistaproducto();
    }

    public function principal8(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controlproducto(); 
 $programa->principal8();

?>