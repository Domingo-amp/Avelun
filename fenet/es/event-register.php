<?php
 
  $nombre = $_GET['nombre'];
  $telefono = $_GET['telefono'];
  $pais = $_GET['pais'];
  $correo = $_GET['correo'];
  $fecha = date("Y-m-d") ;


  $body='Nuevo registro para el EVENTO Webinar
			
	Nombre:			'.$_GET['nombre'].'								
	Telefono: 	'.$_GET['telefono'].'
	Pais:			  '.$_GET['pais'].'								
	Correo: 		'.$_GET['correo'].'
	';
								
	$para="enriquemendoza162@gmail.com";
				
	$mensaje = $body;
					
	$asunto 	= 'Nuevo Registro al EVENTO Webinar';
	$desde		= 'info@fenet.com.ve';
	$mensaje 	= $body;
	$cabeceras = "";
	$cabeceras = "MIME-VErsion: 1.0 \r\n";
	$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
	$cabeceras = "To: " . $para . "\r\n";
	$cabeceras = "From: " . $_GET['correo'] . "\r\n";    
							
							
	mail ($para, $asunto, $mensaje, $cabeceras);	




        //Conexión Servidor Remoto
$conexion=mysql_connect("localhost","fenetco2_admin","hdwtnkue456");
$baseDeDatos=mysql_select_db("fenetco2_bd",$conexion);
//$conexion=mysql_connect("localhost","root","");
//$baseDeDatos=mysql_select_db("fenetco1_bd",$conexion);


$ssql = "SELECT * FROM webinar_registers WHERE correo='$correo'";
    $rs = mysql_query($ssql,$conexion);
    if (mysql_num_rows($rs)>0)
        { 
        	

        	echo "Ya estas registrado al evento";

			
		}else{

            echo "La marca se ha registrado con exito";

            mysql_query ("INSERT INTO webinar_registers VALUES (
                '',
                '$nombre',
                '$telefono',
                '$pais',
                '$correo',
                '$fecha'
                )");   
}
    






?>

