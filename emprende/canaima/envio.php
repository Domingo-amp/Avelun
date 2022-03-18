<?php
require ('cnx.php');
$marca = $_POST['marca'];
$tiendaProv = $_POST['tiendaProv'];



/*
if ($marca === '' || $tiendaProv ==='') {
	echo json_encode('error');
}else{
	echo json_encode('CORRECTO: <br>Marca:'.$marca.'<br>TiendaProv:'.$tiendaProv);
}
*/




			                $ssql = "SELECT * FROM marcas WHERE nombre_marca='$marca' AND tienda_asociada='$tiendaProv'";
			                $result = $conexion->query($ssql);
			                $num = mysqli_num_rows($result); 
			                $row = mysqli_fetch_assoc($result);                   
			                $consulta = "SELECT * FROM productos WHERE marca='$marca' AND Tienda='$tiendaProv'";
			                $hacerconsulta2 = $conexion->query($consulta);    											
							$reg = mysqli_fetch_array($hacerconsulta2);


							if ($reg[1] == '') {
								echo json_encode('error');


							}else{

										while ($reg)
										{                        
											echo json_encode("
											<div style='width:300px; background-color:none; display:inline-block; vertical-align: top; margin-right:20px; margin-bottom:30px;'>
											<form method='post' action='producto.php'>
												<div> <input type='image' name='imageField' width='300' height='220' style='margin-right:20px; margin-bottom:-7px;' src='http://localhost/avelun/site/intranet/fotos_principales/".$reg[8]."' /></div>
												<input type='hidden'  value='".$reg[1]."' />
												<div style='color:#007bff;  border:none; background-color:none; height:40px;'>".$reg[1]."</div>
												<div><input type='submit'  value='".$reg[6]."$' style='color:red; border:none; background-color:white;'/></div>	
												<input type='hidden' name='modelo' value='".$reg[3]."'/>
												<input type='hidden' name='marca' value='".$marca."'/>	
												</form>					
											</div>							
											");							
											$reg = mysqli_fetch_array($hacerconsulta2);							
										}
										mysqli_close($conexion);

							}


?>