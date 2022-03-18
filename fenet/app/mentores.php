<?php

$mentores = array(
	array(
		'id'     	 => "0",
		'nombre'     => "Enrique Mendoza",
		'Pais'       => "Venezuela",
		'tarifa'  	 => "Free",
		'descripcion'  	 => "Personal Grow and Bussines Developer . .",
		'info'  	 => "Fundador de FENET y Cofundador de AveLun, experiencia en tecnologias de la informacion, desarrollo personal y profesional y bussines grow",
		'foto'       => "http://fenet.com.ve/app/mentores/tecnologia.jpg"
	),

	array(
		'id'     	 => "3",
		'nombre'     => "Jose Salmeron",
		'Pais'       => "España",
		'tarifa'  	 => "20$",
		'descripcion'  	 => "Crecimiento Personal",
		'info'  	 => "Psicologo, experto en crecimiento personal y Terapias con Flores de Bach, Director de Centro Eduard Bach",
		'foto'       => "http://fenet.com.ve/app/mentores/tecnologia.jpg"
	),

	array(
		'id'     	 => "4",
		'nombre'     => "Paula Vergara",
		'Pais'       => "España",
		'tarifa'  	 => "250$",
		'descripcion'  	 => "Crecimiento Profesional",
		'info'  	 => "Asesoria en desarrollo de Liderazgo y coach ejecutiva de equipos de trabajo. Facilitadora y conferenciante",
		'foto'       => "http://fenet.com.ve/app/mentores/tecnologia.jpg"
	),
	
	array(
		'id'     	 => "1",
		'nombre'     => "Domingo Mendoza",
		'Pais'       => "Venezuela",
		'tarifa'  	 => "7$",
		'descripcion'  	 => "Web Developer and  technical support . .",
		'info'  	 => "Experiencia en desarrollo web front y backend",
		'foto'       => "http://fenet.com.ve/app/mentores/tecnologia.jpg"
	),
	
	array(
		'id'     	 => "2",
		'nombre'     => "Pedro Mendoza",
		'Pais'       => "Venezuela",
		'descripcion'  	 => "Law support, citizen security and human resources. .",
		'info'  	 => "Especilista en el area de talento humano, liderazgo, motivacion y formacion de equipos efectivos ",
		'tarifa'  	 => "69$",
		'foto'       => "http://fenet.com.ve/app/mentores/tecnologia.jpg"
	)

			);
echo json_encode($mentores);
//echo json_encode('list de mentores');




//Obtener el JSON recibido en el variable $ json.
$json = file_get_contents('php://input');

//decodifica el JSON recibido y lo almacena en la variable $ obj.
$obj = json_decode($json, true);

/*$correo =  $obj['cucharilla1'];
$clave 	=  $obj['cucharilla2'];

$mensaje = 'Aqui va el arreglo Json con la lista';
*/

//decodifica the message into JSON format.
//echo json_encode($mensaje);




?>