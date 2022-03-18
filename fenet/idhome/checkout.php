<!DOCTYPE html>
<html>
<head>
	<title>ID HOME</title>
	<link href="css/style.css"  rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	-->
	
	<link rel="icon" type="image/png" href="img/favicon.png">

	
</head>
<body>





<nav>
	<div style='float:left; margin:10px;'>LOGO</div>
	<div style='float:right; margin:10px;'>ORDER NOW</div>
	<div style='float:right; margin:10px;'>HOME </div>
</nav>












<div class="vida">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width:300px;">
	 CHAT BOT <img src="img/heart.png" width="25px" class="icon-nav">
	</button>
</div>












<?php 
$cleaning = $_POST['cleaning'];
$cooking = $_POST['cooking'];
$resting = $_POST['resting'];
$productivity = $_POST['productivity'];
$exterior = $_POST['exterior'];
$skin = $_POST['skin'];
$bano = $_POST['bano'];
$pool = $_POST['pool'];
$jacuzzy = $_POST['jacuzzy'];
$conectivity = $_POST['conectivity'];
$pluggins = $_POST['pluggins'];
$precio = $_POST['preciototal'];

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = date("j-n-y");



require ('cnx.php');

mysqli_query ($conexion, "INSERT INTO checkout VALUES (
	'',
	'$nombre',
	'$email',
	'$telefono',
	'$cleaning',
	'$cooking',
	'$resting',
	'$productivity',
	'$exterior',
	'$skin',
	'$bano',
	'$pool',
	'$jacuzzy',
	'$conectivity',
	'$pluggins',
	'$precio',
	'$fecha'
	)");





/*


$body='SE HA INICIADO UN PROCESO DE COMPRA
			
	Telefono de Contacto			'.$_POST['nombre'].'								
	Mensaje: 						'.$_POST['telefono'].'
	Telefono de Contacto			'.$_POST['email'].'								
	';
								
	$para="jmartinez@idhome.com.co";
				
	$mensaje = $body;
					
	$asunto 	= 'Proceso de Compra ID Home';
	$desde		= $_POST["email"];
	$mensaje 	= $body;
	$cabeceras = "";
	$cabeceras = "MIME-VErsion: 1.0 \r\n";
	$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
	$cabeceras = "To: " . $_POST ["email"] . "\r\n";
	$cabeceras = "From: " . $_POST ["email"] . "\r\n";    
							
							
	mail ($para, $asunto, $mensaje, $cabeceras);
	*/
?>
















<br><br>
<br><br>
<br><br>




<div style='width:40%; display:inline-block; padding-left:100px;'>

**Resumen**<br>

<?php 

echo "Cleaning: ".$_POST['cleaning']."%";
echo "<br>";
echo "Cooking: ".$_POST['cooking']."%";
echo "<br>";
echo "Resting: ".$_POST['resting']."%";
echo "<br>";
echo "Productivity: ".$_POST['productivity']."%";
echo "<br>";
echo "Exterior: ".$_POST['exterior'];
echo "<br>";
echo "Skin: ".$_POST['skin'];
echo "<br>";
echo "Bano: ".$_POST['bano'];
echo "<br>";
echo "Pool: ".$_POST['pool'];
echo "<br>";
echo "Jcuzzi: ".$_POST['jacuzzy'];
echo "<br>";
echo "Conectivity: ".$_POST['conectivity'];
echo "<br>";
echo "Pluggins: ".$_POST['pluggins'];
echo "<br>";
echo "Precio Total: ".$_POST['preciototal'];
echo "<br>";
?>

</div>





















<div style='width:40%; display:inline-block; vertical-align:top;'>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="enriquemendoza162@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="ID Home">
<input type="hidden" name="amount" value="3369.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>




































</body>
</html>