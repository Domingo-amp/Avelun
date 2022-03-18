<?php
  




  $conexion=mysql_connect("localhost","fenetco2_admin","hdwtnkue456");
  $baseDeDatos=mysql_select_db("fenetco2_bd",$conexion);


/*
$conexion=mysql_connect("localhost","root","");
  $baseDeDatos=mysql_select_db("fenetco1_bd",$conexion);
*/












/*
if($conexion->connect_error)
			        {
			        	die("La conexion fallo". $conexion->connect_error);
			        }


$host 		="localhost";
$db_user 	="root";
$db_pass 	="";
$db_name 	="systems_admin";
$db_table 	="usuarios";

$conexion = new mysqli($host, $db_user, $db_pass, $db_name);

  if($conexion->connect_errno)
			        {
			        	die("La conexion fallo". $conexion->connect_errno);

			        }

http://php.net/manual/es/mysqli.ping.php
*/
?>
