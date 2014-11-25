<?php



class vistapromotores {

    
    public $base2;
    public $promotores;









    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->promotores = file_get_contents('../plantilla/promotores.html');
      
        
       
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){


        $this->base2 = str_ireplace('{contenido}', $this->promotores, $this->base2);
 

        return $this->base2;

    }

}
