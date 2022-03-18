
	<div class="" style="background-color: #f0f0f0; margin-top: 10px; margin-bottom: 20px; width: 100%; text-align: center;">
		<br>
		<h5>Filtrar por:</h5>



		<div style="width: 150px; height: auto; background-color: none; display: inline-block; vertical-align: top; text-align: center;">

                    <label>Selecciona la Marca:</label>



		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <?php
		                    echo "<select class='form-control' name='marca' style='height:40px; margin-bottom:0px;'>";
		                    
		                    while($fila=mysqli_fetch_array($resultado_consulta_mysql))
		                    {                       
		                        echo "<option name='marca'>".$fila['nombre_marca']."</option>";
		                    }
		                    echo "</select>";
					?>    
  					<br>

   		</div>

   		<div style="width: 150px; height: auto; background-color: none; display: inline-block; vertical-align: top; margin-top: 20px; text-align: center;">
		   		<input type="submit" name="submit" value="Submit"><br>
    	</div>

		</form>






<div class="container-fluid">



<div class="row" style="margin-top: 30px;">



<div  style="background-color: none; text-align: center; padding-bottom: 10px; margin-top: 10px;">
				
<?php




if(isset($_POST['submit'])){
	 
	$marca = $_POST['marca'];
	

//Conexión Servidor Remoto

require ('../cnx.php');

echo "<h3>$marca</h3><br>";
 

$ssql = "SELECT * FROM marcas WHERE nombre_marca='$marca'";
$result = $conexion->query($ssql);
$num = mysqli_num_rows($result); 
$row = mysqli_fetch_assoc($result);
$visited = $row['visited'];
$newvisited = $visited+1;



$consultaupdate = "UPDATE marcas SET visited='$newvisited' WHERE nombre_marca='$marca'";     
$hacerconsulta = $conexion->query($consultaupdate);

             

$consulta = "SELECT * FROM productos WHERE marca='$marca' ";
$hacerconsulta2 = $conexion->query($consulta);


                            
							echo "<div style='background-color:none;'>";
							
							
							
							$reg = mysqli_fetch_array($hacerconsulta2);

							while ($reg)
							{
                            
							echo "
							
							<div style='width:300px; background-color:none; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px;'>
								<form method='post' action='producto.php'>
									<div><input type='image' name='imageField' width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='../site/intranet/fotos_principales/".$reg[8]."' /></div>
									<input type='hidden'  value='".$reg[1]."' />
									<div style='color:#007bff;  border:none; background-color:none; height:40px;'>".$reg[1]."</div>
									<div><input type='submit'  value='".$reg[6]."$' style='color:red; border:none; background-color:white;'/></div>	
									<input type='hidden' name='modelo' value='".$reg[3]."'/>
									<input type='hidden' name='marca' value='".$marca."'/>	
								</form>					
							</div>
							
							";
							

							$reg = mysqli_fetch_array($hacerconsulta2);
							
							}
							echo "</div>";
							mysqli_close($conexion);


?>

		

</div>	


	</div><!-- Fin del div class row--> 

	<?php
}

	?>




	</div>	































	



<div class="row" style="margin-top: 30px;">



<div  style="background-color: none; text-align: center; padding-bottom: 10px; margin-top: 10px;">
				
<?php

//Conexión Servidor Remoto

require ('../cnx.php');

 

$ssql = "SELECT * FROM marcas WHERE nombre_marca='Canaima'";
$result = $conexion->query($ssql);
$num = mysqli_num_rows($result); 
$row = mysqli_fetch_assoc($result);
$visited = $row['visited'];
$newvisited = $visited+1;



$consultaupdate = "UPDATE marcas SET visited='$newvisited' WHERE nombre_marca='Canaima'";     
$hacerconsulta = $conexion->query($consultaupdate);

             

$consulta = "SELECT * FROM productos WHERE marca='Canaima' ";
$hacerconsulta2 = $conexion->query($consulta);


                            
							echo "<div style='background-color:none;'>";
							
							
							
							$reg = mysqli_fetch_array($hacerconsulta2);

							while ($reg)
							{
                            
							echo "
							
							<div style='width:300px; background-color:none; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px;'>
								<form method='post' action='producto.php'>
									<div><input type='image' name='imageField' width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='intranet/fotos_principales/".$reg[8]."' /></div>
									<input type='hidden'  value='".$reg[1]."' />
									<div style='color:#007bff;  border:none; background-color:none; height:40px;'>".$reg[1]."</div>
									<div><input type='submit'  value='".$reg[6]."$' style='color:red; border:none; background-color:white;'/></div>	
									<input type='hidden' name='modelo' value='".$reg[3]."'/>
									<input type='hidden' name='marca' value='Canaima'/>	
								</form>					
							</div>
							
							";
							

							$reg = mysqli_fetch_array($hacerconsulta2);
							
							}
							echo "</div>";
							mysqli_close($conexion);


?>

		

</div>	


	</div><!-- Fin del div class row--> 







<?php

		include ("filtroFooter.php");
		include ("footer.php");
	?>
</div><!--Container END-->

	









