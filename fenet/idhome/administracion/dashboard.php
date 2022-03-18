<?php

session_start();

  if ($_SESSION['login'])
    {

        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>ID HOME</title>
            <link href="../css/style.css"  rel="stylesheet" type="text/css">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
            
            <link rel="icon" type="image/png" href="img/lun.png">

            
        </head>
        <body>

        
<nav style='background-color:red;'>
	<div style='float:left; margin:10px;'>LOGO</div>
	<a href='destroy.php'><div style='float:right; margin:10px;'>CERRAR SESSION</div></a>
	
</nav>
<BR>

<BR>

<BR>

<h3 style='text-align:center;'>Solicitudes Enviadas</h3>
<BR>

<BR>
        <?php







require ('../cnx.php');

        $consulta = "SELECT * FROM checkout";



        //$hacerconsulta=mysql_query ($consulta,$conexion);    PHP 5
        $hacerconsulta = $conexion->query($consulta);      

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


                $reg = mysqli_fetch_array($hacerconsulta);

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





                $reg = mysqli_fetch_array($hacerconsulta);
                echo "</tr>";
                }
                echo "</table>";
                mysqli_close($conexion);





















?>
</body>
</html>
<?php







    }
    else
    {
        header("location:login.php");
        
    }

?>