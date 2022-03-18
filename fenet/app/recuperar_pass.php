<?php


  include ('cnx.php');

  //Obtener el JSON recibido en el variable $ json.
  $json = file_get_contents('php://input');

  //decodifica el JSON recibido y lo almacena en la variable $ obj.
  $obj = json_decode($json, true);


  //$email = 'enriquemendoza162@gmail.com';
  $email =  $obj['usuario'];



  $arreglo=array();

	$ssql = "SELECT * FROM usuarios WHERE email='$email' ";
  $dossql = $conexion->query($ssql);
  
  if (mysqli_num_rows($dossql)>0){


	while ($fila =mysqli_fetch_array($dossql)){

		$arreglo []= array("email" => $fila["email"], "nombre"=> $fila["nombre"],"password"=> $fila["password"]);
  }

	


//echo json_encode($arreglo);
//  print_r ($arreglo);



$pass= $arreglo[0]['password'];




          $body2 = 'Saludos Cordiales:
              
                Sus datos de acceso para ingresar a su cuenta FENET son los siguientes:
                
                    Usuario:  '.$email.'
                    Password: '.$pass.'
                  
                 Usted puede cambiar su clave cuando guste desde su cuenta FENET en la seccion Perfil en el menu de opciones.       
                
          
                  Si en algun momento usted tiene alguna duda o necesita de apoyo tecnico personalizado puede contactar nuestros Asesores en la opcion Contactar Asesor. Nuestros especialistas estan listos para atenderles 24/7.
                    
                    Si usted no solicito la recuperacion de los datos por favor informenos al email info@fenet.com.ve.
                    
                      ';


              $para2= $email;
              $asunto2  = "Recuperacion de Cuenta FENET";              
              $mensaje2   = $body2;
              $cabeceras2 = "From: " . "info@fenet.com.ve" . "\r\n";

              mail ($para2, $asunto2, $mensaje2, $cabeceras2);



              echo json_encode('recuperado');




      }
      else
      {
        echo json_encode('unregister');
      }
      


      
    


?>