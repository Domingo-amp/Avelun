<?php

  session_start();
  if ($_SESSION['login'])
    {

    	require('model/cnx2.php');
    	include("model/selects_db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inteligencia de Mercado</title>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	
<!--	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<meta charset="UTF-8"/>

<!--
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
-->


<style type="text/css">

	.show{
		display: block;
	}

	.hidden{
		display: none;
	}
</style>


<script type="text/javascript">

$(function(){
     $("#Dato1").click(function(e){
     	$("#elemento1Arcorderon").css("display", "block");
     	$("#elemento2Arcorderon").css("display", "none");
     	$("#elemento3Arcorderon").css("display", "none");
     	$("#elemento4Arcorderon").css("display", "none");
     });
     $("#Dato2").click(function(e){
     	$("#elemento1Arcorderon").css("display", "none");
     	$("#elemento2Arcorderon").css("display", "block");
     	$("#elemento3Arcorderon").css("display", "none");
     	$("#elemento4Arcorderon").css("display", "none");
     });
     $("#Dato3").click(function(e){
     	$("#elemento1Arcorderon").css("display", "none");
     	$("#elemento2Arcorderon").css("display", "none");
     	$("#elemento3Arcorderon").css("display", "block");
     	$("#elemento4Arcorderon").css("display", "none");
     });
});
</script>


</head>
<body>



<header>
	<img src="images/logo.png">

</header>


<?php
include("menu.php");
 ?>


<div class="breadcrumb">Inicio /  <b>Detalles de Cliente</b></div>



<br><br>






	<div class="panel">
	<div class="panel-heading">
		Detalles del Registro	

	</div>
	<div class="panel-body">

		<div id="headerAcording">
			<div style="width: 200px; display: inline-block;">
				<input type="button" id="Dato1" value="Solicitudes de Servicios" class="input_buton" style="width: 200px;">
			</div>
			<div style="width: 230px; display: inline-block;">
				<input type="button" id="Dato2" value="Ventas Completadas" class="input_buton" style="width: 230px;">
			</div>
			<div style="width: 200px; display: inline-block;">
				<input type="button" id="Dato3" value="MAS" class="input_buton" style="width: 200px;">
			</div>
		</div>












		<div id="elemento1Arcorderon" class="show">
			<?php

				$consulta = "SELECT * FROM servicio WHERE estatus='solicitado'  ";



					$hacerconsulta=mysql_query ($consulta,$conexion);
							 //$hacerconsulta=mysql_query ($consulta,$conexion);

							echo "<table class='table-sm table-striped' style='width:100%;'>";
							echo "<tr>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>ID</b></font></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Servicio</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Descripcion</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Pais</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Estado</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Ciudad</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Direccion</b></td>";
							echo "<td align='center' bgcolor='#e8e8e8'><b><font color='black'>Cliente</b></td>";
							
							echo "</tr>";


							$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);

							while ($reg)
							{
							echo "<tr>";
							echo "<td align='center' >".$reg[0]."</td>";
							echo "<td align='center' >".utf8_decode($reg[1])."</td>";
							echo "<td align='center' >".utf8_decode($reg[3])."</td>";
							echo "<td align='center' >".utf8_decode($reg[7])."</td>";
							echo "<td align='center' >".$reg[6]."</td>";
							echo "<td align='center' >".utf8_decode($reg[5])."</td>";
							echo "<td align='center' >".$reg[4]."</td>";
							


							echo "<td  align='center' style='border: inset 0pt'>
								<form action='verUsuarios.php' method='post'>
									<input type='hidden' name='idContacto' value=".$reg[0].">
									<input type='image' name='imageField' src='images/view.gif' />
								</form>
							</td>";//FIN DEL echo

							



							$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
							echo "</tr>";
							}
							echo "</table>";
							mysql_close($conexion);


			?>
    	</div><!--FIN DE LA INFORMACION DE CONTACTO-->















		<div id="elemento2Arcorderon" class="show">
			acordin2				
		</div><!--FIN DE LA INFORMACION CORPORATIVA-->

























		<div id="elemento3Arcorderon" class="hidden">
			acording3
		</div><!--FIN DE LA INFORMACION DE NEGOCIOS-->













	</div>
	</div>






</body>
</html>

<?php

}else{
  header("location:index.php");
}

?>
