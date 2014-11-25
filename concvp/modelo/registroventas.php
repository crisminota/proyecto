<?php
require_once '../core/conexion.php';
?>

<?php  

// Recibimos por POST los datos procedentes del formulario  

$ID_VENTA=$_POST['ID_VENTA'];
$NIT=$_POST['NIT'];
$ID_PLAZO=$_POST['ID_PLAZO'];
$ID_PROMOTOR=$_POST['ID_PROMOTOR'];
// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['ID_VENTA']) && !empty($_POST['ID_VENTA']) 
   && isset($_POST['NIT']) && !empty($_POST['NIT'])
        && isset($_POST['ID_PLAZO']) && !empty($_POST['ID_PLAZO'])
         && isset($_POST['ID_PROMOTOR']) && !empty($_POST['ID_PROMOTOR'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "insert into ventas( ID_VENTA,NIT,ID_PLAZO,ID_PROMOTOR) values('".$ID_VENTA."','".$NIT."','".$ID_PLAZO."','".$ID_PROMOTOR."')";
  
    if ($obj_conex->ejecutar_query($_GRABAR_SQL)){
                     echo "<script>
                              alert('se registro correctamente!');
                            window.location.href='../control/controlventas.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                                    alert('no se pudo registrar!');
                            window.location.href='../control/controlventas.php';
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


