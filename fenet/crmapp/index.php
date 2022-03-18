<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inteligencia de Mercado</title>	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<nav>
	<ul>
		<li>Iniciar Sesión</li>		
	</ul>
</nav>


<div>Inicio /  <b>Acceso</b></div>


<?php

if (isset($_POST['send'])){

	$nick =  $_POST['user'];

	if ($_POST['user']=="admin" && $_POST['pass']=="admin"){
		
		
        $_SESSION["login"] = $nick;
        


		?>
		 <script type="text/javascript">
             window.location="metas.php";
         </script>
		<?php
	}else{
		?>
			<div class="error_user">Usuario o contraseña Invalida</div>
		<?php		
	}

}
?>





<div class="panel">
	<div class="panel-heading">Credenciales de Acceso</div>
	<div class="panel-body">

	<form method="post" action="#">
		<table>
			<tr>
				<td style="text-align: right;">Nombre de Usuario</td>				
				<td class="test"><input type="text" name="user" class="input_text"></td>
			</tr>
			<tr>
				<td style="text-align: right;">Contraseña</td>
				<td><input type="password" name="pass" class="input_text"></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align: left;"><input type="submit" name="send" value="Iniciar Sesión" class="input_buton"></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align: left;"><a href="#">Recuperar Contraseña</a></td>
			</tr>
		</table>
	</form>
	</div>
</div>







</body>
</html>