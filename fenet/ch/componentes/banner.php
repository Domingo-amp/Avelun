



<div id="banner">
<?php

 if(isset($_POST['enviar_solicitud'])){

$body='Hemos recibido una solicitud de contacto con los siguientes datos
			
	Telefono de Contacto			'.$_POST['nombre'].'								
	Mensaje: 						'.$_POST['telefono'].'
	Telefono de Contacto			'.$_POST['email'].'								
	Mensaje: 						'.$_POST['servicio'].'
	';
								
	$para="enriquemendoza162@gmail.com";
				
	$mensaje = $body;
					
	$asunto 	= 'Nueva Solicitud de Servicio';
	$desde		= $_POST["email"];
	$mensaje 	= $body;
	$cabeceras = "";
	$cabeceras = "MIME-VErsion: 1.0 \r\n";
	$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
	$cabeceras = "To: " . $_POST ["email"] . "\r\n";
	$cabeceras = "From: " . $_POST ["email"] . "\r\n";    
							
							
	mail ($para, $asunto, $mensaje, $cabeceras);	
																			

 ?>
 		<font style="font-size: 18px; color: #98ca3f;">该请求已发送
 		<br>
 		顾问很快就会与您联系</font>

 		<form method="post" action="#">
 		<input  type="submit" class="btn btn-primary" style="margin-top:30px; width:300px; background-color: #b30000; border:0px;" value="发送另一个请求"/>
	  	</form>
	
 <?php
 }else{
?>
 	<font><b>你需要什么?</b></font>
	
	<form style="margin-top: 20px; font-size: 12px;">
		<textarea style="width: 400px;" placeholder="告诉我们您需要什么..." id="necesidad"></textarea>
	</form>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width:300px; background-color: #b30000; border:0px;" onclick="queNecesitas()">
	  		发送请求
	</button>

<?php
 }

?>


	

	<div id="listaServicios" style="margin-top: 200px; cursor: pointer;" onclick="verServicios()">
		<font class="tipo-letra-baner" style="font-size: 15px;">你能找到FENET？</font>
		<a href="#listaServiciosFenet">
			<img src="../img/servicios/arrow-down.png" width="33px;" id="arrowDown" class="show">
		</a>		
			<img src="../img/servicios/arrow-up.png" width="33px;" id="arrowup" class="hidden">
		
	</div>

</div>







<script type="text/javascript">
	function queNecesitas(){
	var solicitud = document.getElementById("necesidad").value;
	document.getElementById("necesidad2").value= solicitud;

	return solicitud;	
	}
</script>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">你需要什么?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	
      <form id="modalForm1" action="#" method="post">    		
        		<p style="text-align: center; font-size: 13px; color: red;">请填写我们的团队可以与您交流的信息
</p>
        	 <div class="form-group">
			    <label for="exampleFormControlInput1">名字</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" >
			  </div>
			   <div class="form-group">
			    <label for="exampleFormControlInput1">电话号码</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" name="telefono">
			  </div>
			   <div class="form-group">
			    <label for="exampleFormControlInput1">电邮地址</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
			  </div>

			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">你需要什么?</label>
			    <textarea class="form-control" id="necesidad2" rows="3" name="servicio"></textarea>
			  </div>
        	
        	<input type="submit" name="enviar_solicitud" value="完整的申请" class="btn btn-primary" style="margin-top:30px; width:300px; background-color: #b30000; border:0px;">
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">关门</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>


</div><!--FIN de imagen de fondo-->



