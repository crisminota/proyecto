

<?php


require_once '../vista/vistadetalle.php';
require_once '../modelo/programaModel.php';

class controldetalle{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistadetalles();
    }

    public function principal3(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controldetalle(); 
 $programa->principal3();

?>