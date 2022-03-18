<?php


//Obtener el JSON recibido en el variable $ json.
$json = file_get_contents('php://input');

//decodifica el JSON recibido y lo almacena en la variable $ obj.
$obj = json_decode($json, true);


$cliente 	=  $obj['usuario'];
//$cliente 	=  'admin@admin.com';



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






$consulta = "SELECT * FROM solicitudes WHERE usuario='$cliente'";
$hacerconsulta2 = $conexion->query($consulta); 


$arreglo=array();


//while ($fila =mysqli_fetch_array($hacerconsulta2)){

	//$id = $fila ["id"];

	$ssql = "SELECT * FROM solicitudes WHERE usuario='$cliente' ";
	$dossql = $conexion->query($ssql);
	while ($fila =mysqli_fetch_array($dossql)){

		$arreglo []= array("id" => $fila["id"], "tipo"=> $fila["tipo"],"descripcion"=> $fila["descripcion"],"fecha"=> $fila["fecha"],"estatus"=> $fila["estatus"]);
	}


//	}


	//print_r ($arreglo);

echo json_encode($arreglo);


	
















?>