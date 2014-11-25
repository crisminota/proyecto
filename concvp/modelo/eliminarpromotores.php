<?php
require_once('../core/conexion2.php');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link href="../estatico/css/bootstrap.min.css" rel="stylesheet">
         <link href="../estatico/css/main.css" rel="stylesheet">
          <script type="text/javascript" src="../estatico/js/funciones.js"> </script>
        <title>modifcar promotor</title>

    </head>
    <body onload="limpiar()">
    <center>
                                                                        <header>
<div class="container">

<div class="row">

<div class="col-xs-12 col-sm-6 cold-md-8 col-lg-8">
<h1 class="texto tamtex1"> Control de Ventas por Promotor</h1>
<h5 class="texto tamtex1 "> CVP</h5>

</div>


<div class="hidden-xs col-sm-6 cold-md-4 col-lg-4 centrar">
<a href="#"> <img src="../estatico/img/facebook.png" alt="">  </a>
<a href="#"> <img src="../estatico/img/google.png" alt="">  </a>
<a href="#"> <img src="../estatico/img/twitter.png" alt="">  </a>



</div>

</div>


</div>

</header>
            
                   <nav class="navbar navbar-default">
<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">CVP</a></div>

                  
                <div  class="collapse navbar-collapse navbar-ex1-collapse">
                   
                    <ul class="nav navbar-nav">
                    <li><a href="../control/controlmenuPrincipal.php">Principal</a></li>
                        <li><a href="../control/controlventas.php">Ventas</a></li>
                        <li><a href="../control/controldetalle.php">Detalle</a></li>
                     
                    </ul>                   
                      


                   </div>


</nav>     
        <h1>
           eleminar promotor
        </h1>
        <p>
              <?php
           $ID_PROMOTOR= $_POST['txtCodigo'];
            $sql = "select * from promotor where ID_PROMOTOR='" . $ID_PROMOTOR . "'";
            $res = mysql_query($sql);
            if ($res) {
                $reg = mysql_fetch_assoc($res);
                if ($reg) {
                    ?>
        <div class="container">
             <section class="color5">

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-5 col-lg-7 col-md-offset-2">
                    <form name="form" action="eliminar2.php" method="post">
                
             <div class="panel-body">
                     <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                  <tbody>    
                <tr>
                         <td class="relleno silver">id promotor
                        <td class="relleno blanco" ><input type="text" name="ID_PROMOTOR" value="<?php echo $reg["ID_PROMOTOR"]; ?>" readonly> 
                    <tr>
                        <td class="relleno silver">nombre promotor
                        <td class="relleno blanco" ><input type="text" name="NOMBRE_PROMOTOR" value="<?php echo $reg["NOMBRE_PROMOTOR"]; ?>"readonly>   
                    <tr>
                        <td class="relleno silver">id zona
                        <td class="relleno blanco"><input type="text" name="ID_ZONA" value="<?php echo $reg["ID_ZONA"]; ?>" readonly>  
                             <tr>
                        <td class="relleno silver">direccion
                        <td class="relleno blanco"><input type="text" name="DIRECCION" value="<?php echo $reg["DIRECCION"]; ?>" readonly>   
            </tbody>

                </table>
                           </div> 
                 </div> 
            <input class="btn btn-primary btn-lg active" type="button" value="eliminar" onclick="eliminar()">
           
            </form>
                 </div>
                </div>
                  </div>
            
                <?php
            } else {
                echo "
                        <script> 
                        alert('El codigo:$ID_PRODUCTO No Existe!!!')
                            window.location='eliminar.html';                       
                         </script>
                    
                   ";
            }
        } else {
            echo "no existen registros!";
        }
        ?>
        <br>
        <div class="col-xs-6 col-sm-6 col-md-5 col-lg-7 col-md-offset-2">
 <a class="btn btn-primary btn-lg active" onclick="window.location = '../control/controladmin.php'">
                    <span>regresar</span></a>
            </div>
    </center>
</body>
</html>	