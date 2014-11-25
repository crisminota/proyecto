<?php
require_once('../core/conexion2.php');
$ID_PROMOTOR =$_POST['ID_PROMOTOR'];
$NOMBRE_PROMOTOR =$_POST['NOMBRE_PROMOTOR'];
$ID_ZONA =$_POST['ID_ZONA'];
$DIRECCION =$_POST['DIRECCION'];

$sql="delete from promotor where ID_PROMOTOR='" . $ID_PROMOTOR. "'";
$res=  mysql_query($sql);

if(!$res){
    echo "
        <script>
        alert('no se pudo eliminar los datos!');
        window.location='eliminarpromotores.html';
         </script>
    ";
    

    
    
}else{
    
        echo "
        <script>
        alert('se eliminaron los datos del  cliente  sastifactoriamente !!');
        window.location='eliminarpromotores.php';
    </script>
";
}
        ?>

