<?php


//Obtener el JSON recibido en el variable $ json.
$json = file_get_contents('php://input');

//decodifica el JSON recibido y lo almacena en la variable $ obj.
$obj = json_decode($json, true);

error_reporting(0);


$correo 	=  $obj['correo'];
$fecha = date('Y-m-d H:i:s');
$nombre	    =  $obj['nombre'];
$pass       =  $obj['pass'];
$phone      =  $obj['phone'];
$localidad 	=  $obj['localidad'];



require ('../cnx.php');


$conexion->query("UPDATE tiendas SET gerente='$nombre', pass='$pass', telefono='$phone', pais='$localidad', fecha_registro='$fecha' WHERE correo='$correo'");

$conexion->query("UPDATE usuarios_admin_tienda SET nombre='$nombre', password='$pass', telefono='$phone', fecha_registro='$fecha' WHERE correo='$correo'");



echo json_encode($correo);



























/*
$host 		="158.69.227.160";
$db_user 	="zolumark_admin";
$db_pass 	="hdwtnkue456";
$db_name 	="zolumark_bd";
$db_table 	="usuarios";

$conexion = new mysqli($host, $db_user, $db_pass, $db_name);

  if($conexion->connect_errno)
			        {
			        	die("La conexion fallo". $conexion->connect_errno);

			        }else{
						echo 'conexion exitosa';
					}
					*/
?>