
<?php


require_once '../vista/vistaadministrador.php';
require_once '../modelo/programaModel.php';

class controladmin{
    
    public $vista;
    public $model;
    
    public function __construct() {
        
        $this->vista = new vistaadministrador();
    }

    public function principal23(){
        
        echo $this->vista->refactory_descripcion();
    }
    
    
}

$programa = new controladmin(); 
 $programa->principal23();

?>