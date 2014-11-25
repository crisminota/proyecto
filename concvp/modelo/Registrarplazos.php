<?php
require_once '../core/conexion.php';
?>

<?php  

// Recibimos por POST los datos procedentes del formulario  

$ID_PLAZO=$_POST['ID_PLAZO'];
$NOMBRE_PLAZO=$_POST['NOMBRE_PLAZO'];
$TIEMPO=$_POST['TIEMPO'];

// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['ID_PLAZO']) && !empty($_POST['ID_PLAZO']) 
   && isset($_POST['NOMBRE_PLAZO']) && !empty($_POST['NOMBRE_PLAZO'])
        && isset($_POST['TIEMPO']) && !empty($_POST['TIEMPO'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "insert into plazos( ID_PLAZO,NOMBRE_PLAZO,TIEMPO) values('".$ID_PLAZO."','".$NOMBRE_PLAZO."','".$TIEMPO."')";
  
    if ($obj_conex->ejecutar_query($_GRABAR_SQL)){
                     echo "<script>
                              alert('se registro correctamente!');
                            window.location.href='../control/controlplazos.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                                    alert('no se pudo registrar!');
                            window.location.href='../control/controlplazos.php';
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


