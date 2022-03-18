<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Prueba de conexión mysql.</title>
	<style type="text/css">
		html {
			font-family: proximanova;
		}
		body {
			margin: 0;
		}
		header {
			text-align: center;
			color: #286090;
			border-bottom: solid 5px #F25C27;
			margin: 0;
			height: 50px;
			width: 100%;
			padding: 15px;
		}
		header h1 {
			margin: auto;
			padding: 0px;
		}
		.container {
			display: block;
			text-align: center;
			background-color: rgb(220,220,220);
			border-radius: 5px;
			padding: 10px;
			width: 75%;
			margin: 1em auto;
		}
		.exito {
			color: green;
		}
		.fallo {
			color: red;
		}
	</style>
</head>
<body>
	<header><h1>Prueba de conexión MySQL. Cortesía de servicioshosting.com</h1></header>
	<div class="container">
		<?php 
			$servidor = "localhost";              //Nombre de servidor
			$usuario = "fenetco2_idhomeadm";         //Se coloca el nombre de usuario que corresponda.
			$clave = "hdwtnkue456";              //Contraseña
			$db = "fenetco2_idhome";        //Nombre de la base de datos.
			$conexion=mysqli_connect("$servidor","$usuario","$clave","$db");
			
			if($conexion):
		?>
			<h2 class="exito">Conexión exitosa</h2>
			
			<p>Error <?=mysqli_get_host_info($conexion)?></p>
		<?php 
	
	
	
	
	
	$consulta = "SELECT * FROM checkout";



	$hacerconsulta=mysql_query ($consulta,$conexion);
			 //$hacerconsulta=mysql_query ($consulta,$conexion);

			echo "<table class='table-sm table-striped' style='width:100%;'>";
			echo "<tr>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>ID</b></font></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Nombre</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Email</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Telefono</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Cleaning</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Cooking</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Resting</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Productivity</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Exterior</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Relax</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Skin</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Conectivity</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Pluggin</b></td>";
			echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Fecha</b></td>";
			
			echo "</tr>";


			$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);

			while ($reg)
			{
			echo "<tr>";
			echo "<td align='center' >".$reg[0]."</td>";
			echo "<td align='center' >".utf8_decode($reg[1])."</td>";
			echo "<td align='center' >".utf8_decode($reg[2])."</td>";
			echo "<td align='center' >".$reg[3]."</td>";
			echo "<td align='center' >".utf8_decode($reg[4])."</td>";
			echo "<td align='center' >".$reg[5]."</td>";
			echo "<td align='center' >".$reg[6]."</td>";
			echo "<td align='center' >".$reg[7]."</td>";
			echo "<td align='center' >".$reg[8]."</td>";
			echo "<td align='center' >".$reg[9]."</td>";
			echo "<td align='center' >".$reg[10]."</td>";
			echo "<td align='center' >".$reg[11]."</td>";
			echo "<td align='center' >".$reg[12]."</td>";
			echo "<td align='center' >".$reg[13]."</td>";





			$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
			echo "</tr>";
			}
			echo "</table>";
			mysql_close($conexion);






	
	
	
	
	
	
	
	
	
	
	
	else: ?>
			<h2 class="fallo">Conexión fallida:</h2>
			<p><?=mysqli_connect_error()?></p>
		<?php 
			endif;
		?>	
	</div>
</body>
</html>