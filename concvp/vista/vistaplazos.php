<?php



class vistaplazos {

    
    public $base2;
    public $menucolunprincipal;
  









    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->menucolum = file_get_contents('../plantilla/menucolum.html');
     
      
        
       
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){

        $this->base2 = str_ireplace('{contenido}', $this->menucolum, $this->base2);
 

        return $this->base2;

    }

}
