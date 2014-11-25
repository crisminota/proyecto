<?php
require_once('../core/conexion2.php');
$ID_PRODUCTO=$_POST['ID_PRODUCTO'];
$NOMBRE_PRODUCTO=$_POST['NOMBRE_PRODUCTO'];
$Valor =$_POST['VALOR'];

$sql="delete from producto where ID_PRODUCTO='" . $ID_PRODUCTO. "'";
$res=  mysql_query($sql);

if(!$res){
    echo "
        <script>
        alert('no se pudo eliminar los datos!');
        window.location='eliminar.html';
         </script>
    ";
    

    
    
}else{
    
        echo "
        <script>
        alert('se eliminaron los datos del  cliente  sastifactoriamente !!');
        window.location='eliminar.php';
    </script>
";
}
        ?>

