<?php
require_once '../core/conexion.php';
?>

<?php  

// Recibimos por POST los datos procedentes del formulario  

$ID_PROMOTOR =$_POST['ID_PROMOTOR'];
$NOMBRE_PROMOTOR=$_POST['NOMBRE_PROMOTOR'];
$ID_ZONA=$_POST['ID_ZONA'];
$DIRECCION=$_POST['DIRECCION'];
// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['ID_PROMOTOR']) && !empty($_POST['ID_PROMOTOR']) 
   && isset($_POST['NOMBRE_PROMOTOR']) && !empty($_POST['NOMBRE_PROMOTOR'])
        && isset($_POST['ID_ZONA']) && !empty($_POST['ID_ZONA'])
        && isset($_POST['DIRECCION']) && !empty($_POST['DIRECCION'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "insert into promotor( ID_PROMOTOR,NOMBRE_PROMOTOR,ID_ZONA,DIRECCION) values('".$ID_PROMOTOR."','".$NOMBRE_PROMOTOR."','".$ID_ZONA."','".$DIRECCION."')";
  
    if ($obj_conex->ejecutar_query($_GRABAR_SQL)){
                     echo "<script>
                              alert('se registro correctamente!');
                            window.location.href='../control/controlpromotor.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                                    alert('no se pudo registrar!');
                            window.location.href='../control/controlpromotor.php';
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


