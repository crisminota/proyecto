<?php



class vistadetalles {

    
    public $base2;
    public $detalle;









    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->detalle = file_get_contents('../plantilla/detalles.html');
      
        
       
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){


        $this->base2 = str_ireplace('{contenido}', $this->detalle, $this->base2);
 

        return $this->base2;

    }

}
