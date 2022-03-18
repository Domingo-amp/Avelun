<div class="quienesSomos visto" id="conocenos">
		<div class="titulo">
			<font class="tipo-letra"><b>私たちは誰ですか？</b></font>
			<br>
			<font class="tipo-letra-dos"><b>私たちの事業</b></font>
			<br>
			<p class="tipo-letra-tres">FENET（ネットへの信仰）は、Systems Admins C.Aによって開発されたプラットフォームです. それはそのクライアントとユーザーが専門的なサービスや製品を要求してそれらを予定するか、またはどんな場所にそれらを向けることを可能にします。 私たちの仕事は、製品や契約サービスを取得する必要がある企業や人々を、他のサービスプロバイダ、企業、技術専門家、流通業者と結び付けることです.</p>
		</div>


		<div class="caracteristicas">
			<div class="inline-block">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/profesional.png"></div>
				<div class="texto-crctc tipo-letra-cuatro">
					<b>専門職</b>
					<br>
					<p class="tipo-letra-tres">当社のアドバイザチームは、資格のある技術者や専門企業に連絡することでサービスリクエストを処理する準備が整いました.</p>
				</div>
			</div>
			<div class="inline-block margin-left">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/honestidad.png"></div>
				<div class="texto-crctc tipo-letra-cuatro">
					<b>正直なところ</b>
					<br>
					<p class="tipo-letra-tres">FENETによって参照されたサービスプロバイダーは以前に私達のチームによって連絡されインタビューを受けました.</p></div>
			</div>
			<div class="inline-block-dos">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/atencion.png"></div>
				<div class="texto-crctc-dos tipo-letra-cuatro">
					<b>個人的な注意</b>
					<br>
					<p class="tipo-letra-tres">私たちのFENETアドバイザーは、24時間365日あなたを支援し、プロのサービスプロバイダーの獲得と契約にあなたを同行させるためにあります.</p>
				</div>
			</div>
		</div>

		<a href="terminosyCondiciones.pdf" target="_blank"><div class="inline-terminos">サービスの利用規約</div></a>
	</div>



	<div class="registro">
		<div class="formulario">
			<div class="franjaRoja"><b>アカウントを作成</b></div>







			<div class="center" style="display: block"; id="formulario" >
				<spam id="spamCondicion" style="color: red; font-size: 12px;"></spam>
				<br>
				<spam id="spamTerminos" style="color: red; font-size: 12px;"></spam>
				<form>
					<input class="inputUno" type="text" name="" placeholder="お名前" id="nombre">
					<br>
					<input class="inputUno" type="text" name="" placeholder="姓" id="apellido">
					<br>
					<input class="inputUno" type="email" name="" placeholder="メールアドレス" id="email">
					<br>
					<input class="inputUno" type="password" name="" placeholder="パスワード" id="pass"/>
					<br>
					<input class="inputUno" type="text" name="" placeholder="電話番号" id="telefono">
					<br>
					<spam style="margin-left:-80px;">国:</spam>
					<select class="selectUno" name="pais"/ id="pais" >
								 <option>選択してください</option>
									<option>Alemania</option>
									<option>Argentina</option>
									<option>Brasil</option>
									<option>Colombia</option>
									<option>Chile</option>
									<option>Ecuador</option>
									<option>España</option>
									<option>Mexico</option>
									<option>Peru</option>
									<option>Panama</option>
									<option>India</option>
									<option>China</option>
									<option>USA</option>
									</select>

								 <input type="hidden" name="estado" value="consultar">
				 <!--
						<select class="selectUno" name="estado" id="estado"/>
											<option >Amazonas</option>
											<option >Anzoategui</option>
											<option >Apure</option>
											<option >Aragua</option>
											<option >Barinas</option>
											<option >Bolivar</option>
											<option >Carabobo</option>
											<option >Cojedes</option>
											<option >Delta Amacuro</option>
											<option >Distrito Capital</option>
											<option >Falcon</option>
											<option >Guarico</option>
											<option >Lara</option>
											<option >Merida</option>
											<option >Miranda</option>
											<option >Monagas</option>
											<option >Nueva Esparta</option>
											<option >Portuguesa</option>
											<option >Sucre</option>
											<option >Tachira</option>
											<option >Trujillo</option>
											<option >Vargas</option>
											<option >Yaracuy</option>
											<option >Zulia</option>
											</select>
										-->
		                  <br>

							    <div style="background-color:#d5d6da; padding: 5px; border-radius: 5px; width: 255px; margin: 0 auto; margin-top: 5px;">
							    <input  type="checkbox" name="terminos" value="terminos" id="terminos"> 私は読んで理解しました
							    	<a href="terminosyCondiciones.pdf" target="_blank" class="a-terminos">サービスの利用規約</a>
							  </div>
						  <br>
						  <input class="inputEnviar" type="button" name="registrar" value="登録する" id="registrar"/>
				</form>
			</div>







			<div id="registroCompleto" style="display: none; text-align: center;">

				新規ユーザーは正常に登録されました。これでサービス要求を出すことができます. アクセスデータがあなたのEメールに送信されました.

				<br><br>
				<a href="../app/serviciosIndex.php"><input class="inputEnviar" type="button" name="registrar" value="サービス依頼" /></a>

			</div>


			<div id="usuarioYaRegistrado" style="display: none; text-align: center;">

				入力したメールは既にシステムに登録されています。 すでにアカウントを持っていてパスワードを覚えていない場合は、 <a href="recuperarPass.php" style="color: #184c73;"> 「ここ」であなたのアカウントを回復する</a>.

				<br>

				<input class="inputEnviar" type="button"  value="受け入れる" id="aceptarYaRegistrado"/>

			</div>








		</div>
	</div>








	<div class="quienesSomos oculto" id="conocenos2">

		<div class="titulo">
			<font class="tipo-letra"><b>私たちは誰ですか？</b></font>
			<br>
			<font class="tipo-letra-dos"><b>私たちの事業</b></font>
			<br>
			<p class="tipo-letra-tres">FENET（ネットへの信仰）は、Systems Admins C.Aによって開発されたプラットフォームです. それはそのクライアントとユーザーが専門的なサービスや製品を要求してそれらを予定するか、またはどんな場所にそれらを向けることを可能にします。 私たちの仕事は、製品や契約サービスを取得する必要がある企業や人々を、他のサービスプロバイダ、企業、技術専門家、流通業者と結び付けることです.</p>
		</div>


		<div class="caracteristicas">
			<div class="inline-block">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/profesional.png"></div>
				<div class="texto-crctc tipo-letra-cuatro">
					<b>専門職</b>
					<br>
					<p class="tipo-letra-tres">当社のアドバイザチームは、資格のある技術者や専門企業に連絡することでサービスリクエストを処理する準備が整いました.</p>
				</div>
			</div>
			<div class="inline-block margin-left">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/honestidad.png"></div>
				<div class="texto-crctc tipo-letra-cuatro">
					<b>正直なところ</b>
					<br>
					<p class="tipo-letra-tres">FENETによって参照されたサービスプロバイダーは以前に私達のチームによって連絡されインタビューを受けました.</p></div>
			</div>
			<div class="inline-block-dos">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/atencion.png"></div>
				<div class="texto-crctc-dos tipo-letra-cuatro">
					<b>個人的な注意 </b>
					<br>
					<p class="tipo-letra-tres">私たちのFENETアドバイザーは、24時間365日あなたを支援し、プロのサービスプロバイダーの獲得と契約にあなたを同行させるためにあります.</p>
				</div>
			</div>
		</div>
	</div>