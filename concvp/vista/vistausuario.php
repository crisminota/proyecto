<?php



class vistausuario {

    
    public $base2;
    public $menucolunprincipal;
    public $servicios;







    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->menucolunprincipal = file_get_contents('../plantilla/menucolunprincipal.html');
       
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){


        $this->base2 = str_ireplace('{contenido}', $this->menucolunprincipal, $this->base2);
 

        return $this->base2;

    }

}
