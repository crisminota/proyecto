<?php
require_once('../core/conexion2.php');
$codigo =$_POST['ID_PRODUCTO'];
$nombreproducto =$_POST['NOMBRE_PRODUCTO'];
$Valor =$_POST['VALOR'];


$sql="update producto set NOMBRE_PRODUCTO='".$nombreproducto."',VALOR='".$Valor."'
    where ID_PRODUCTO='".$codigo."'";
$res=  mysql_query($sql);

if(!$res){
    echo "
        <script>
        alert('no se pudo Modificar los datos!');
        window.location='modificar.php';
         </script>
    ";
    

    
    
}else{
    
        echo "
        <script>
        alert('se modifico el registro con Exito!!');
        window.location='modificar.html';
    </script>
";
}
        ?>

