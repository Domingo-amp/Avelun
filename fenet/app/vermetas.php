<?php




//Obtener el JSON recibido en el variable $ json.
$json = file_get_contents('php://input');

//decodifica el JSON recibido y lo almacena en la variable $ obj.
$obj = json_decode($json, true);

$idusuariofenet =  $obj['usuario'];


//$correo =  'enriquemendoza162@gmail.com';
//$password 	=  '123';




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





	$consulta = "SELECT * FROM metas WHERE usuario='$idusuariofenet' AND estatus='activo' ";
	$hacerconsulta2 = $conexion->query($consulta); 
	
	if (mysqli_num_rows($hacerconsulta2)>0){
		
		while ($fila =mysqli_fetch_array($hacerconsulta2)){
			echo json_encode	($arreglo []= array(
			"id" 			=> $fila["id"], 
			"meta"			=> $fila["meta"],
			"motivacion"	=> $fila["motivacion"],
			"posicion"		=> $fila["posicion"],
			"smart"			=> $fila["smart"],
			"plan"			=> $fila["plan"],
			"medicion"		=> $fila["medicion"],
			"fecha"			=> $fila["fecha"]
		));
		}
	}
	else
	{
		echo json_encode('sinmetas');
	}








/*

	echo json_encode($login);


	$mensaje = 'rejected';
	echo json_encode($mensaje);
*/










?>