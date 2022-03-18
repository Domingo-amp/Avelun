<?php


//Obtener el JSON recibido en el variable $ json.
$json = file_get_contents('php://input');

//decodifica el JSON recibido y lo almacena en la variable $ obj.
$obj = json_decode($json, true);

error_reporting(0);



/*$usuariofenet 	=  $obj['usuario'];
$descripcion 	=  $obj['solicitud'];*/
date_default_timezone_set('America/Caracas');
$fecha = date('Y-m-d H:i:s');



//Datos de Conexino con e servidor local
/*
$servidor = 'localhost';
$usuario = 'root';
$clave= '';
$bd = 'fenetapp_bd';
*/


//Datos de Conexino con e servidor

$servidor = 'fenet.com.ve';
$usuario = 'fenetco2_adminapp';
$clave= 'hdwtnkue456';
$bd = 'fenetco2_fenetapp';
$conexion = new mysqli ($servidor,$usuario,$clave,$bd);



$servicio = 'Logistica';
$descripcion= 'Servicios de transporte, carga y almacenamiento de mercancias supervisados por expertos en el tema que garantizan la seguridad de tu mercancia ';




$conexion->query("INSERT INTO servicios_list VALUES (
	'',
	'$servicio',
	'$descripcion'
	)");


	echo json_encode('registrado');






	














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