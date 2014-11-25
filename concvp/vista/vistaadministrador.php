<?php



class vistaadministrador {

    
    public $base2;
    public $admin;









    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->admin = file_get_contents('../plantilla/Administra.php');
      
        
       
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){


        $this->base2 = str_ireplace('{contenido}', $this->admin, $this->base2);
 

        return $this->base2;

    }

}
