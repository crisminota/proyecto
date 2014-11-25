<?php
require_once '../core/conexion.php';
?>

<?php  

// Recibimos por POST los datos procedentes del formulario  

$ID_REGISTRO=$_POST['ID_REGISTRO'];
$NOMBRE_PRODUCTO=$_POST['NOMBRE_PRODUCTO'];
$ID_PROMOTOR=$_POST['ID_PROMOTOR'];

// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['ID_REGISTRO']) && !empty($_POST['ID_REGISTRO']) 
   && isset($_POST['NOMBRE_PRODUCTO']) && !empty($_POST['NOMBRE_PRODUCTO'])
        && isset($_POST['ID_PROMOTOR']) && !empty($_POST['ID_PROMOTOR'])
        
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "insert into nuevo_producto( ID_REGISTRO,NOMBRE_PRODUCTO,ID_PROMOTOR) values('".$ID_REGISTRO."','".$NOMBRE_PRODUCTO."','".$ID_PROMOTOR."')";
  
    if ($obj_conex->ejecutar_query($_GRABAR_SQL)){
                     echo "<script>
                              alert('se registro correctamente!');
                            window.location.href='../control/controlpedidos.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                                    alert('no se pudo registrar!');
                            window.location.href='../control/controlpedidos.php';
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


