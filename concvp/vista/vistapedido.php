<?php



class vistapedido {

    
    public $base2;
    public $pedidos;
    public $listapedidos;
    public $emcabezado;
    public $lista;
    public $menu;
        public $pie;
  public $head;







    public function __construct() {
        
        $this->base2 = file_get_contents('../plantilla/base2.html');
        $this->pedidos = file_get_contents('../plantilla/pedidos.html');
        $this->encabezado = file_get_contents('../plantilla/encabezado.php');
        $this->menu = file_get_contents('../plantilla/menu.php');
        $this->pie = file_get_contents('../plantilla/pie.php');
        $this->head = file_get_contents('../plantilla/head.php');
        $this->lista = file_get_contents('../modelo/listapromotores2.php');
        
 
       
    }


    

    public function refactory_perfil() {
$this->lista = str_ireplace('{como1}', $this->head, $this->lista);
$this->lista = str_ireplace('{como2}', $this->encabezado, $this->lista);
$this->lista = str_ireplace('{como3}', $this->menu, $this->lista);
$this->lista = str_ireplace('{como4}', $this->pie, $this->lista);


    }
    public function refactory_descripcion(){

        $this->base2 = str_ireplace('{contenido}', $this->pedidos, $this->base2);
 

        return $this->base2;

    }

}
