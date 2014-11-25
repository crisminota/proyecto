<?php



class vistaventas {

    
    public $base2;
    public $ventas;









    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->ventas= file_get_contents('../plantilla/ventas.html');
      
        
       
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){


        $this->base2 = str_ireplace('{contenido}', $this->ventas, $this->base2);
 

        return $this->base2;

    }

}
