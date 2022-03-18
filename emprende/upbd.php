<?php


//Obtener el JSON recibido en el variable $ json.
$json = file_get_contents('php://input');

//decodifica el JSON recibido y lo almacena en la variable $ obj.
$obj = json_decode($json, true);

error_reporting(0);


$marca 	=  $obj['marca'];
$correo 	=  $obj['correo'];
/*$usuariofenet2 	=  $obj['username2'];*/
/*
$descripcion 	=  $obj['solicitud'];
date_default_timezone_set('America/Caracas');
$fecha = date('Y-m-d H:i:s');

*/

//Datos de Conexino con e servidor local
/*
$servidor = 'localhost';
$usuario = 'root';
$clave= '';
$bd = 'fenetapp_bd';
*/


//Datos de Conexino con e servidor

require ('../cnx.php');




    $consulta = "SELECT * FROM tiendas WHERE correo='$correo'";
    $hacerconsulta2 = $conexion->query($consulta); 
    
    
    $row = mysqli_fetch_assoc($hacerconsulta2);
    $dato = $row['marcas_agregadas'];
    
    $array = explode(",", $dato);
    array_push($array, $marca);
    
    
  
    $string = implode(",", $array);
    $conexion->query("UPDATE tiendas SET marcas_agregadas='$string' WHERE correo='$correo'");


    echo json_encode($correo);















/*
$consulta = "SELECT * FROM testup WHERE nametest='$marca'";
$hacerconsulta2 = $conexion->query($consulta); 


$row = mysqli_fetch_assoc($hacerconsulta2);
$dato = $row['nametest'];

$array = explode(",", $dato);
array_push($array, $marca);


echo json_encode($array);
*/ 





	














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