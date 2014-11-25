<?php
require_once('../core/conexion2.php');
$codigo =$_POST['ID_PROMOTOR'];
$NOMBRE_PROMOTOR =$_POST['NOMBRE_PROMOTOR'];
$ID_ZONA =$_POST['ID_ZONA'];
$DIRECCION =$_POST['DIRECCION'];


$sql="update promotor set NOMBRE_PROMOTOR='".$NOMBRE_PROMOTOR."',ID_ZONA='".$ID_ZONA."',DIRECCION='".$DIRECCION."'
    where ID_PROMOTOR='".$codigo."'";
$res=  mysql_query($sql);

if(!$res){
    echo "
        <script>
        alert('no se pudo Modificar los datos!');
        window.location='modificarpromotores.php';
         </script>
    ";
    

    
    
}else{
    
        echo "
        <script>
        alert('se modifico el registro con Exito!!');
        window.location='modificarpromotores.html';
    </script>
";
}
        ?>

