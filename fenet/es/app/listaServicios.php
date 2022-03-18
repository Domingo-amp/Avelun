<?php
  session_start();
  if ($_SESSION['login']){
      include ("cnx.php");          
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">
    <style>
    header{
      width: 382px; height:auto; 
      background-color: white; 
      margin: 0 auto; 
      border-top-right-radius:30px;
      border-top-left-radius:30px;  
      border-top:3px solid black; 
      border-right:3px solid black; 
      border-left:3px solid black;}

    section{
      width: 382px; 
      min-height: 533px;
      background-color: white; 
      margin: 0 auto; 
      border-right: 3px solid black;
      border-left:3px solid black;
    }


    .asesor{
      width: 382px; 
      height: 60px; 
      margin: 0 auto; 
      background-color: green; 
      border-bottom-right-radius: 25px; 
      border-bottom-left-radius: 25px; 
      border-right:3px solid black;
      border-left:3px solid black;
      border-bottom: 3px solid black;
      font-size: 20px; 
      color: white; 
      padding-top: 15px; 
      text-align: center; 
      cursor: pointer;}

    .asesor:hover{background-color:#006837; }

    .btn_aceptar{
        height: 30px;
        width: 250px;
        background-color: #00A1B5;
        margin: 0 auto;
        text-align: center;
        color: white;
    }

    @media (max-width:800px){

    header{width: 100%;}

    section{width: 100%;}

    .asesor{width: 100%;}

    }  
    </style>
    <title>Fe at Network!</title>
  </head>
<body style=" background-color: #003e63;">
<header>
<?php
    include ("menu.php");
?>
</header>
<section>
<?php 

   $email= $_SESSION['login'];

        $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");
        $tipoUsuario = mysql_result($ssql,0,"tipoUsuario");

  
  if ($tipoUsuario == "cliente")
  {
   ?>
    <div style="background-color: none; width: 100%; height: 60px; text-align: right; padding-top: 10px; padding-right: 10px;"><a href="inicio.php"><img src="img/flechave.jpg" height="50"></a></div> 
   <?php
  }
  else
  {
    ?>
    <div style="background-color: none; width: 100%; height: 60px; text-align: right; padding-top: 10px; padding-right: 10px;"><a href="inicioProveedor.php"><img src="img/flechave.jpg" height="50"></a></div> 
    <?php
  }
  ?>
    


  <div style="padding-top: 10px;"></div>
    <p style="width: 100%; text-align: center; margin-bottom: 80px;"><b>Servicios Solicitados</b></p>
<?php

	$ssql = mysql_query("SELECT * FROM usuario WHERE email='".$email."'");           
	$idUsuario  =  mysql_result($ssql,0,"id");


	$ssql = "SELECT * FROM servicio WHERE  usuario='".$idUsuario."' and estatus='solicitado'";
        $rs = mysql_query($ssql,$conexion);     
        if (mysql_num_rows($rs)>0){

            $consulta = "SELECT * FROM servicio WHERE usuario=$idUsuario and estatus='solicitado';";
            $hacerconsulta=mysql_query ($consulta,$conexion);
            $reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);              
            while ($reg){


                echo "<table border='0' bordercolor='blue' align='center' width='100%'>";
                echo "<tr>";
                echo "<td align='center' bgcolor='white' style='height:10px;'><font color='black'></font></td>";
                echo "<td align='center' bgcolor='white'style='height:10px;'><font color='black'></td>";
                // echo "<td align='center' bgcolor='#58ACFA'><b><font color='black'></b></td>";
                echo "</tr>";
                echo "<tr>";
                //echo "<td align='center' class='dark'>".$reg[0]."</td>";
                echo "<td align='center' class='dark' bgcolor='#ccc'><img src='img/home.png' width='40px' height='40px'></td>";
                echo "<td class='dark' align='center' style='border: inset 0pt' bgcolor='#ccc'> 
					                 <div>Servicio:".$reg[1]." </div>
					                 <div>".$reg[3]."</div>
				
					                 <div>Fecha ".$reg[8]." / Hora ".$reg[9]." </div>
					                 <form action='completarServicio.php' method='post'>
						                  <input type='hidden' name='servicio'  value=".$reg[0].">
						                  <input type='hidden' name='proveedor'  value=".$reg[10]."> 
						                  <input type='submit' style='width:250px; height:30px; cursor:pointer; background-color:#545454; color:white; border-radius:8px;' value='Servicio Completado' name='".$reg[0]."' />                         
					                 </form>
                      </td>";

              $reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
              echo "</tr>";
              }
              echo "</table>";
              mysql_close($conexion);
          }else{
            echo "<div style='text-align:center;'>No hay servicios solicitados</div>";
          }
?>
<br>
</section>


<a href="asesor.php"><div class="asesor">Contactar Asesor</div></a>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{
  header("location:index.php");
}
?>