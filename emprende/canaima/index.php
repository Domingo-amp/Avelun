<?php
	require ('cnx.php');
	$tiendaProv = 'Avelun';
	include ("header.php");
	$consulta_mysql="SELECT * FROM marcas WHERE tienda_asociada='$tiendaProv'";
	$resultado_consulta_mysql= $conexion->query($consulta_mysql);
?>

<body>



<div class="container-fluid">

<?php

		include ("filtro-productos.php");

?>


<div class="row" style="margin-top: 30px; width:100%; text-align: center;" id="respuesta"></div><!-- Fin del div class row--> 




</div><!--Container END-->




























































<script src="app.js"></script>
</body>
</html>