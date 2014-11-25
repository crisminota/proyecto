<?php


require_once '../vista/vistausuario.php';
require_once '../modelo/programaModel.php';

class controlusuario{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistausuario();
    }

    public function principal3(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controlusuario(); 
 $programa->principal3();

?>