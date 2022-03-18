<?php
	include ("componentes/head.php")
?>

<body>
<div class="imagen-fondo"><!--Este div se cierra en banner.php-->


<?php
	include ("componentes/nav.php");
	include ("componentes/banner.php");
	include ("componentes/lista_servicios.php");
	include ("componentes/servicios_hover.php");
?>



<section>
	<?php
		include ("componentes/about_register.php");
	?>
</section>







<div id="video" >
	<div class="video-contenedor"><iframe class="iframe-video" src="https://www.youtube.com/embed/AjhAZ_j3yGA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
</div>



<?php
	include ("componentes/proveedor.php");
	include ("componentes/donde_funciona.php");
	include ("componentes/patrocinantes.php");
	include ("componentes/contacto.php");
?>








<footer><b>Systems Admins C.A Todos los Derechos Registrados</b></footer>









<?php
	include ("componentes/jquerys.php");
?>








</body>
</html>
