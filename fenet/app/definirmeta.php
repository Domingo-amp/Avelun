<?php


//Obtener el JSON recibido en el variable $ json.
$json = file_get_contents('php://input');

//decodifica el JSON recibido y lo almacena en la variable $ obj.
$obj = json_decode($json, true);

error_reporting(0);



$usuariofenet 	=  $obj['usuario'];
$meta 			=  $obj['meta'];
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








	$consulta = "SELECT * FROM metas WHERE usuario='$usuariofenet'";
	$hacerconsulta2 = $conexion->query($consulta); 
	
	if (mysqli_num_rows($hacerconsulta2)>0){

		echo json_encode('metaExist');

	}else{

	
			$conexion->query("INSERT INTO metas VALUES (
				'',
				'$usuariofenet',
				'$meta',
				'En Progreso',
				'Por definir',
				'Por definir',
				'Por definir',
				'Por definir',
				'activo',
				'$fecha'
				)");


				echo json_encode('metaLoad');





				
				/*Enviar Correos*/ 
				$body2 = 'Saludos Cordiales:
						
				Se ha definido una nueva meta
				
					Usuario:  '.$usuariofenet.'
					Meta   :  '.$meta.'
				
					Si usted no solicito la recuperacion de los datos por favor informenos al email info@fenet.com.ve.
					
					';


			$para2= 'enriquemendoza162@gmail.com';
			$asunto2  = "Nueva Meta de Usuario";              
			$mensaje2   = $body2;
			$cabeceras2 = "From: " . "info@fenet.com.ve" . "\r\n";

			mail ($para2, $asunto2, $mensaje2, $cabeceras2);

			/*Fin de Envio de Correos*/



		}









/*
$host 		="fenet.com.ve";
$db_user 	="fenetco2_adminapp";
$db_pass 	="hdwtnkue456";
$db_name 	="fenetco2_fenetapp";
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