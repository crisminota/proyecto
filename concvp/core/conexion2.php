<?php
$conex=mysql_connect('localhost','root','') or die('error en la conexion');
$db=mysql_select_db('ventas',$conex) or die ('error de la base de datos');