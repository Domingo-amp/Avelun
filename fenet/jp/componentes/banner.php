



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
 		<font style="font-size: 18px; color: #98ca3f;">リクエストが送信されました。
 		<br>
 		すぐにアドバイザーがご連絡します。</font>

 		<form method="post" action="#">
 		<input  type="submit" class="btn btn-primary" style="margin-top:30px; width:300px; background-color: #b30000; border:0px;" value="別のリクエストを送信 "/>
	  	</form>
	
 <?php
 }else{
?>
 	<font><b>何が必要ですか？</b></font>
	
	<form style="margin-top: 20px; font-size: 12px;">
		<textarea style="width: 400px;" placeholder="必要なものを教えてください..." id="necesidad"></textarea>
	</form>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="width:300px; background-color: #b30000; border:0px;" onclick="queNecesitas()">
	  		リクエストを送信
	</button>

<?php
 }

?>


	

	<div id="listaServicios" style="margin-top: 200px; cursor: pointer;" onclick="verServicios()">
		<font class="tipo-letra-baner" style="font-size: 15px;">FENETを見つけることができますか？</font>
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
        <h5 class="modal-title" id="exampleModalLabel">何が必要ですか？</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      	
      <form id="modalForm1" action="#" method="post">    		
        		<p style="text-align: center; font-size: 13px; color: red;">私たちのチームがあなたに伝えることができる情報を記入してください</p>
        	 <div class="form-group">
			    <label for="exampleFormControlInput1">名</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" >
			  </div>
			   <div class="form-group">
			    <label for="exampleFormControlInput1">電話番号</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" name="telefono">
			  </div>
			   <div class="form-group">
			    <label for="exampleFormControlInput1">電子メールアドレス</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
			  </div>

			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">何が必要ですか</label>
			    <textarea class="form-control" id="necesidad2" rows="3" name="servicio"></textarea>
			  </div>
        	
        	<input type="submit" name="enviar_solicitud" value="完全なアプリケーション" class="btn btn-primary" style="margin-top:30px; width:300px; background-color: #b30000; border:0px;">
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>


</div><!--FIN de imagen de fondo-->



