<!DOCTYPE html>
<html>
<head>
	<title>Avelun</title>
	<meta charset="UTF-8">

  <meta name="keywords" content="tienda, ropa, calzado, joyeria, zapatos, moda, salud, medicina"/>
  <meta name="author" content="Systems Admins C.A" />
  <meta name="copyright" content="Systems Admins C.A" />
  <meta name="robots" content="index, follow">
  <meta name="google" content="nositelinkssearchbox">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>


<body>
<?php
require("cnx.php");
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="metas.php">Metas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="servicios.php">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="solicitudes.php">Solicitudes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">Usuarios</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h3>Servicios</h3>






<div class="container-fluid">
    
<?php


  

$consulta = "SELECT * FROM servicios_list";
$hacerconsulta2 = $conexion->query($consulta);


                            
							echo "
                            <table class='table table-dark'>
                            <thead>
                              <tr>
                                <th scope='col'>ID</th>
                                <th scope='col'>Servicio</th>
                                <th scope='col'>Descripcion</th>
                              </tr>
                            </thead>
                            <tbody>";
							
							
							
							$reg = mysqli_fetch_array($hacerconsulta2);

							while ($reg)
							{
                            
							echo "

                            <tr>
                                <th scope='row'>".$reg[0]."</th>
                                <td>".$reg[1]."</td>
                                <td>".$reg[2]."</td>
                            </tr>
			
							
							";
							

							$reg = mysqli_fetch_array($hacerconsulta2);
							
							}
							echo "</tbody>
                            </table>";
							mysqli_close($conexion);


?>

</div>






</body>
</html>