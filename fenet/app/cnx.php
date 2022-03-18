<?php


//Datos de Conexino con e servidor local
/*
$servidor = 'localhost';
$usuario = 'root';
$clave= '';
$bd = 'fenetapp_bd';
*/


//Datos de Conexino con e servidor
$servidor = 'avelun.com';
$usuario = 'avelunco';
$clave= ']P62cShCT1(5cr';
$bd = 'avelunco_fenetapp';
$conexion = new mysqli ($servidor,$usuario,$clave,$bd);




/*
$host 		='fenet.com.ve';
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