<?php
require_once '../core/conexion.php';
?>

<?php  

// Recibimos por POST los datos procedentes del formulario  

$ID_VENTA =$_POST['ID_VENTA'];
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$CANTIDAD=$_POST['CANTIDAD'];



// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['ID_VENTA']) && !empty($_POST['ID_VENTA']) 
   && isset($_POST['ID_PRODUCTO']) && !empty($_POST['ID_PRODUCTO'])
        && isset($_POST['CANTIDAD']) && !empty($_POST['CANTIDAD'])
            
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "insert into  detalles( ID_VENTA,ID_PRODUCTO,CANTIDAD) values('".$ID_VENTA."','".$ID_PRODUCTO."','".$CANTIDAD."')";
  
    if ($obj_conex->ejecutar_query($_GRABAR_SQL)){
                     echo "<script>
                              alert('se registro correctamente!');
                            window.location.href='../control/controldetalle.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                                    alert('no se pudo registrar!');
                            window.location.href='../control/controldetalle.php';
                            </script>";
                        }
 
    } 
    else {

        echo "<script>
        
        window.location.href='javascript:history.go(-1)';
        </script>";
        }

?>  
</body>  

</html> 


