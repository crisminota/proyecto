<?php



class vistaproducto {

    
    public $base2;
    public $producto;









    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->producto = file_get_contents('../plantilla/productos.html');
      
        
       
    }


    

    public function refactory_perfil($datos) {



    }
    public function refactory_descripcion(){


        $this->base2 = str_ireplace('{contenido}', $this->producto, $this->base2);
 

        return $this->base2;

    }

}
