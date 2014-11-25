<?php
require_once '../core/conexion.php';
?>

<?php  

// Recibimos por POST los datos procedentes del formulario  

//$Id_usuario =$_POST['Id_usuario'];
$Nombre_Usuario=$_POST['Nombre_Usuario'];
$Password=$_POST['Password'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

//if(isset($_POST['Id_usuario']) && !empty($_POST['Id_usuario']) 
  // && isset($_POST['Password']) && !empty($_POST['Password'])
    //    && isset($_POST['Nombre_Usuario']) && !empty($_POST['Nombre_Usuario'])
       //) 
   // {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "insert into usuario(Nombre_Usuario,Password,telefono,correo) values('".$Nombre_Usuario."','".$Password."','".$telefono."','".$correo."')";
  
    if ($obj_conex->ejecutar_query($_GRABAR_SQL)){
                     echo "<script>
                              alert('se registro correctamente!');
                            window.location.href='../control/controlentrar.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                                    alert('no se pudo registrar!');
                            window.location.href='../control/controlentrar.php';
                            </script>";
                        }
 
 //   } 
    //else {

       // echo "<script>
        
   //     window.location.href='javascript:history.go(-1)';
    //    </script>";
  //      }

?>  
</body>  

</html> 


