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

$sql="SELECT pro.NOMBRE_PRODUCTO, pro.VALOR, det.CANTIDAD,  promo.NOMBRE_PROMOTOR
FROM ventas.detalles as det, ventas.producto as pro, ventas.ventas vent, ventas.promotor as promo
where det.ID_VENTA  and det.ID_PRODUCTO = pro.ID_PRODUCTO AND det.ID_VENTA = vent.ID_VENTA AND vent.ID_PROMOTOR = promo.ID_PROMOTOR"; 

$res=mysql_query($sql);

//muestra los datos consultados
//echo "<p>Nombres - Departamento - Sueldo</p> \n";
//while($row = mysql_fetch_array($sql)){
    
    
       
    
	//echo "<p>".$row['nombres']." - ".$row['departamento']." - ".$row['sueldo']."</p> \n";
//}
?>
                   <?php
                   
				$cnt = array();
				$products = array();
				
				foreach($_POST as $key=>$value)
				{
					$key=(int)str_replace('_cnt','',$key);
				
					$products[]=$key;
					$cnt[$key]=$value;
				}

				$result = mysql_query("SELECT VALOR, CANTIDAD, NOMBRE_PRODUCTO FROM producto LEFT JOIN detalles ON producto.ID_PRODUCTO = detalles.ID_PRODUCTO");
				
				if(!mysql_num_rows($result))
				{
					echo '<center><h1>Hay un error en la compra!</h1> <center>';
				}
				else
				{ 
					echo '<center><h1>Tu Compra:</h1></center>';
					
					while($row=mysql_fetch_assoc($result))
					{
						echo '<center><h4>'.$cnt[$row['CANTIDAD']].'NOMBRE DEL PRODUCTO : '.$row['NOMBRE_PRODUCTO']." = ".$row['VALOR'].'</h4></center>';
						@$subtotal= $row['CANTIDAD']*$row['VALOR'];
                                                echo '<center><h4>subtotal: $'.$subtotal.'</h4></center>';
                                          
                                               @$total+=$subtotal ; 
                                            
					}
		                    
					echo '<center><h4>Total: $'.$total.'</h4></center>';
				}
                   
                   
                   ?>
                   
                      <div class="container">

   <section class="color5">

            <div class="row">
             <br>
   <div class="text-center col-xs-6 col-sm-6 col-md-5 col-lg-7">
                               
            		
         <table class="table table-bordered">
         	<tr bgcolor="white">
               <th colspan=7><center>Detalles</center>
         	</tr bgcolor="white">
         	<td align="center"><b>N°
              	<td align="center"><b>NOMBRE PRODUCTO
         	<td align="center"><b>VALOR
         	<td align="center"><b>cantidad
         	<td align="center"><b>nombre promotor	
     

         	
    
         	
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
              
             
              	
              	
                
             
      
                 <?php
         		}
         		//cerrar la conexion
         		mysql_close($conex);

?>