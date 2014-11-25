<?php



class vistausuarios {

    
    public $base2;
    public $usuarios;









    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->usuarios = file_get_contents('../plantilla/usuarios.html');
      
        
       
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){


        $this->base2 = str_ireplace('{contenido}', $this->usuarios, $this->base2);
 

        return $this->base2;

    }

}
