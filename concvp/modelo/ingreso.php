
<?php

require_once '../core/conexion.php';
?>

<html>  

<head>  
<title>Borramos los datos en la base de datos</title>  
</head>  

<body>  
<?php  

// Recibimos por POST los datos procedentes del formulario  

$Nombre_Usuario = $_POST["Nombre_Usuario"];
$Password = $_POST["Password"];  

// Abrimos la conexion a la base de datos  
//include("abre_conexion.php"); 

if(isset($_POST['Nombre_Usuario']) && !empty($_POST['Nombre_Usuario']) 
   && isset($_POST['Password']) && !empty($_POST['Password'])
        ) 
    {
    $obj_conex=new Conexion();
    $_GRABAR_SQL = "select Id_usuario,Password,Nombre_Usuario,telefono,correo from usuario where Nombre_Usuario='".$Nombre_Usuario."' and Password='".$Password."'"; 
    $datos=$obj_conex->get_resultados_query($_GRABAR_SQL);
    if (! $datos){
                     echo "<script>
                              alert('usuario o password incorrecto!');
                            window.location.href='../control/controlentrar.php';
                     </script>";
                     
                        }
                        else {
                            echo "<script>
                                    alert('logueado!');
                            window.location.href='../control/controlusuario.php';
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


