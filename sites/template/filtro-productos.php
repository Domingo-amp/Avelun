<div class="row" >
	<div class="col-lg-12" style='background-color:black; color:white; text-align:center;' >
    	Marcas
	</div>

	<div class="col-lg-12  caja-marcas">
<?php
				$ssql = "SELECT * FROM tiendas WHERE nombre = '$tiendaProv'";
				$result = $conexion->query($ssql);
				$row = mysqli_fetch_assoc($result);
				$marcasAgg = $row['marcas_agregadas'];

				$cintilloDeMarcas = explode(",", $marcasAgg);

				$contador = count($cintilloDeMarcas);
                $posicion = 0;

				while ($posicion < $contador){

							$search = $cintilloDeMarcas[$posicion];
							$ssql = "SELECT * FROM marcas WHERE nombre_marca = '$search'";
							$result = $conexion->query($ssql);
							$row = mysqli_fetch_assoc($result);
							$ubicacionImg = $row['logo'];

							echo"
							<div id='marca'>
								<form method='post' action='#' action='#'>
                                    <select style='display:none' class='form-control' name='marca' style='height:40px; margin-bottom:0px;'>
                                        <option style='display:none' name='marca'>".$search."</option>
                                    </select>
									<button name='submit' style='border:none; outline:none;'/><img src='../..".$ubicacionImg."'/></button>
								</form>
							</div>
							";

							$posicion++;                                        
                }

?>  

	</div>
</div>



<div class="container-fluid">
	<div class="row" style="margin-top: 30px;">
		<div  style="background-color: none; text-align: center; padding-bottom: 10px; margin-top: 10px;">
			
		<?php
        $ssql4 = "SELECT * FROM productos WHERE marca='$tiendaProv'";
        $result4 = $conexion->query($ssql4);
        $num4 = mysqli_num_rows($result4); 
 


			if(isset($_POST['submit'])){
				$marca = $_POST['marca'];

				echo "<h3>$marca</h3><br>";

				$consulta = "SELECT * FROM productos WHERE marca='$marca' ";
				$hacerconsulta2 = $conexion->query($consulta);
				echo "<div style='background-color:none;'>";						
				$reg = mysqli_fetch_array($hacerconsulta2);

				while ($reg){                
						echo "	
							<div style='width:300px; background-color:none; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px;'>
								<form method='post' action='producto.php'>
									<div><input type='image' name='imageField' width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='../../site/intranet/fotos_principales/".$reg[8]."' /></div>
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


			}else if($num4>0){

				echo "<h3>$tiendaProv</h3><br>";

				$consulta = "SELECT * FROM productos WHERE marca='$tiendaProv' ";
				$hacerconsulta2 = $conexion->query($consulta);
				echo "<div style='background-color:none;'>";						
				$reg = mysqli_fetch_array($hacerconsulta2);

				while ($reg){                
						echo "	
							<div style='width:300px; background-color:none; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px;'>
								<form method='post' action='producto.php'>
									<div><input type='image' name='imageField' width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='../../site/intranet/fotos_principales/".$reg[8]."' /></div>
									<input type='hidden'  value='".$reg[1]."' />
									<div style='color:#007bff;  border:none; background-color:none; height:40px;'>".$reg[1]."</div>
									<div><input type='submit'  value='".$reg[6]."$' style='color:red; border:none; background-color:white;'/></div>	
									<input type='hidden' name='modelo' value='".$reg[3]."'/>
									<input type='hidden' name='marca' value='".$tiendaProv."'/>	
								</form>					
							</div>			
						";
										
						$reg = mysqli_fetch_array($hacerconsulta2);				
				}
				echo "</div>";
				mysqli_close($conexion);

			}else{
				echo "<p style='text-align:center; font-size:20px; margin-left:100px;'>Aun No has cargado articulos en tu tienda</p>";
				
			}

		?>
		</div>	
	</div>
</div>	


	






