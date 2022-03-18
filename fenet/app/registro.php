<?php


//Obtener el JSON recibido en el variable $ json.
$json = file_get_contents('php://input');

//decodifica el JSON recibido y lo almacena en la variable $ obj.
$obj = json_decode($json, true);

error_reporting(0);



$nombre 	=  $obj['nombre'];
$whatsapp 	=  $obj['whatsapp'];
$email 		= 	$obj['email'];
$password 	=  $obj['password'];
$telefono 	= 	$obj['telefono'];
$pais 		= 	$obj['pais'];
$fecha = date('Y-m-d');



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




$ssql = "SELECT * FROM usuarios WHERE email='$email'";
$rs = $conexion->query($ssql);

		if (mysqli_num_rows($rs)>0)
		{ 
			echo json_encode('error');
		}
		else if ($nombre === '' || $whatsapp ==='' || $email ===''  || $password ==='' || $telefono ==='' || $pais ==='')
		{

			echo json_encode('completar');

		}
		else
		{

			$conexion->query("INSERT INTO usuarios VALUES (
							'',
							'$nombre',
							'',
							'$whatsapp',
							'$email',
							'$password',
							'$telefono',
							'',
							'$pais',
							'$fecha'
							)");

				echo json_encode('registrado');


				

/*Enviar Correos*/ 
				$body2 = 'Saludos Cordiales:
              
                Se ha registrado un nuevo usuario
                
                    Usuario:  '.$nombre.'
					Pais   : '.$pais.'
					Telefono: '.$telefono.'
					Whatsapp: '.$whatsapp.'
                  
                    Si usted no solicito la recuperacion de los datos por favor informenos al email info@fenet.com.ve.
                    
                      ';


              $para2= 'enriquemendoza162@gmail.com';
              $asunto2  = "Nuevo Registro de Usuario";              
              $mensaje2   = $body2;
              $cabeceras2 = "From: " . "info@fenet.com.ve" . "\r\n";

              mail ($para2, $asunto2, $mensaje2, $cabeceras2);



/*Fin de Envio de Correos*/



		}




/*
$conexion->query("INSERT INTO usuarios VALUES (
	'',
	'nombre',
	'apellido',
	'whatsapp',
	'email',
	'password',
	'telefono',
	'direccion',
	'pais',
	'fecha'
	)");


echo 'Regitrado';
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