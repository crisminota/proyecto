<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link href="css/bootstrap.min.css" rel="stylesheet">
               <link href="css/main.css" rel="stylesheet">

<?php
//Desarrollado por Jesus Li��n
//ribosomatic.com
//Puedes hacer lo que quieras con el c�digo
//pero visita la web cuando te acuerdes

//Configuracion de la conexion a base de datos
require_once('../core/conexion2.php');
//consulta todos los empleados

$sql="SELECT * FROM promotor a, ventas b WHERE b.ID_PROMOTOR = a.ID_PROMOTOR";
$res=mysql_query($sql);

//muestra los datos consultados
//echo "<p>Nombres - Departamento - Sueldo</p> \n";
//while($row = mysql_fetch_array($sql)){
    
    
       
    
	//echo "<p>".$row['nombres']." - ".$row['departamento']." - ".$row['sueldo']."</p> \n";
//}
?>
                      <div class="container">

   <section class="color5">

            <div class="row">
             <br>
   <div class="text-center col-xs-6 col-sm-6 col-md-5 col-lg-7">
                               
            		
         <table class="table table-bordered">
         	<tr bgcolor="white">
                <th colspan=9><center>venta</center>
         	</tr bgcolor="white">
         	<td align="center"><b>N°
                <td align="center"><b>id romotor
                <td align="center"><b>nombre promotor
                <td align="center"><b>id zona
                <td align="center"><b>direccion
                        
                <td align="center"><b>id venta
         	<td align="center"><b>nit
                <td align="center"><b>ID plazo
                <td align="center"><b>ID_promotor
         	
         	
         	
         	
    
         	
         		<?php
         		//creando un bucle para mostrar registros
         		$n=0;
         		while ($reg=mysql_fetch_row($res)) {
         			//muestra los datos de c/fila como matiz
         			$n++;
         			//coloriando filas
         			//pregunta si es par
         			if($n%2==0){
         				?>
         				<tr bgcolor="lightblue">
         					<?php
         			}else{
         				?>
         				<tr bgcolor="white">
         					<?php
         			}
                 ?>
                 <td align="center"> <?php echo$n;?>
                 <td align="center"> <?php echo$reg[0];?>
               	 <td align="center"> <?php echo$reg[1];?>
                 <td align="center"> <?php echo$reg[2];?>
               	 <td align="center"> <?php echo$reg[3];?>
                 <td align="center"> <?php echo$reg[4];?>
               	 <td align="center"> <?php echo$reg[5];?>
                 <td align="center"> <?php echo$reg[6];?>
               	 <td align="center"> <?php echo$reg[7];?>   
              	
              	
                
             
      
                 <?php
         		}
         		//cerrar la conexion
         		mysql_close($conex);

?>