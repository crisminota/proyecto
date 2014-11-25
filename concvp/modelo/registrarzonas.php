<?php
require_once '../core/conexion.php';
?>

<?php  

// Recibimos por POST los datos procedentes del formulario  

$ID_ZONA=$_POST['ID_ZONA'];
$NOMBRE_ZONA=$_POST['NOMBRE_ZONA'];


// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['ID_ZONA']) && !empty($_POST['ID_ZONA']) 
   && isset($_POST['NOMBRE_ZONA']) && !empty($_POST['NOMBRE_ZONA'])
     
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "insert into zona( ID_ZONA,NOMBRE_ZONA) values('".$ID_ZONA."','".$NOMBRE_ZONA."')";
  
    if ($obj_conex->ejecutar_query($_GRABAR_SQL)){
                     echo "<script>
                              alert('se registro correctamente!');
                            window.location.href='../control/controlzonas.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                                    alert('no se pudo registrar!');
                            window.location.href='../control/controlzonas.php';
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


