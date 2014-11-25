<?php
require_once '../core/conexion.php';
?>

<?php  

// Recibimos por POST los datos procedentes del formulario  

$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$NOMBRE_PRODUCTO=$_POST['NOMBRE_PRODUCTO'];
$VALOR=$_POST['VALOR'];


// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['ID_PRODUCTO']) && !empty($_POST['ID_PRODUCTO']) 
   && isset($_POST['NOMBRE_PRODUCTO']) && !empty($_POST['NOMBRE_PRODUCTO'])
         && isset($_POST['VALOR']) && !empty($_POST['VALOR'])
     
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "insert into  producto(ID_PRODUCTO,NOMBRE_PRODUCTO,VALOR) values('".$ID_PRODUCTO."','".$NOMBRE_PRODUCTO."','".$VALOR."')";
  
    if ($obj_conex->ejecutar_query($_GRABAR_SQL)){
                     echo "<script>
                              alert('se registro correctamente!');
                            window.location.href='../control/controlproducto.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                                    alert('no se pudo registrar!');
                            window.location.href='../control/controlproducto.php';
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


