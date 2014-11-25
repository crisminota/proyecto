<?php



class vistazona {

    
    public $base2;
    public $zonas;









    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->zonas = file_get_contents('../plantilla/zonas.html');
      
        
       
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){


        $this->base2 = str_ireplace('{contenido}', $this->zonas, $this->base2);
 

        return $this->base2;

    }

}
