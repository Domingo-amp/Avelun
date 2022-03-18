<div class="quienesSomos visto" id="conocenos">
		<div class="titulo">
			<font class="tipo-letra"><b>ÜBER UNS</b></font>
			<br>
			<font class="tipo-letra-dos"><b>UND UNSER GESCHÄFT</b></font>
			<br>
			<p class="tipo-letra-tres">FENET (Vertrauen in das Netzwerk) ist eine von Systems Admins C.A. entwickelte Plattform. Dies ermöglicht seinen Kunden und Benutzern, professionelle Dienstleistungen oder Produkte anzufordern und sie zu planen oder an einen beliebigen Ort zu leiten. Unsere Aufgabe ist es, Unternehmen und Personen, die Produkte und Vertragsservices erwerben müssen, mit anderen Dienstleistern, Unternehmen, technischen Spezialisten oder Vertriebspartnern zu verbinden.</p>
		</div>


		<div class="caracteristicas">
			<div class="inline-block">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/profesional.png"></div>
				<div class="texto-crctc tipo-letra-cuatro">
					<b>PROFESSIONALISMUS</b>
					<br>
					<p class="tipo-letra-tres">Unser Beraterteam ist bereit, Serviceanfragen durch Kontaktaufnahme mit qualifizierten Technikern und spezialisierten Unternehmen zu bearbeiten.</p>
				</div>
			</div>
			<div class="inline-block margin-left">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/honestidad.png"></div>
				<div class="texto-crctc tipo-letra-cuatro">
					<b>Ehrlichkeit</b>
					<br>
					<p class="tipo-letra-tres">Die von FENET empfohlenen Dienstleister wurden zuvor von unserem Team kontaktiert und interviewt.</p></div>
			</div>
			<div class="inline-block-dos">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/atencion.png"></div>
				<div class="texto-crctc-dos tipo-letra-cuatro">
					<b>PERSÖNLICHE AUFMERKSAMKEIT</b>
					<br>
					<p class="tipo-letra-tres">Unsere FENET-Berater stehen Ihnen rund um die Uhr zur Verfügung und begleiten Sie bei der Akquisition und Vergabe von professionellen Dienstleistungsunternehmen.</p>
				</div>
			</div>
		</div>

		<a href="terminosyCondiciones.pdf" target="_blank"><div class="inline-terminos">ALLGEMEINE GESCHÄFTSBEDINGUNGEN</div></a>
	</div>



	<div class="registro">
		<div class="formulario">
			<div class="franjaRoja"><b>Anmelden</b></div>







			<div class="center" style="display: block"; id="formulario" >
				<spam id="spamCondicion" style="color: red; font-size: 12px;"></spam>
				<br>
				<spam id="spamTerminos" style="color: red; font-size: 12px;"></spam>
				<form>
					<input class="inputUno" type="text" name="" placeholder="Name" id="nombre">
					<br>
					<input class="inputUno" type="text" name="" placeholder="Nachname" id="apellido">
					<br>
					<input class="inputUno" type="email" name="" placeholder="e-mail" id="email">
					<br>
					<input class="inputUno" type="password" name="" placeholder="Passwort" id="pass"/>
					<br>
					<input class="inputUno" type="text" name="" placeholder="Telefon" id="telefono">
					<br>

					<spam style="margin-left:-60px;">Country:</spam>
					<select class="selectUno" name="pais"/ id="pais" >
								 <option>Wählen...</option>
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
							    <input  type="checkbox" name="terminos" value="terminos" id="terminos"> Ich habe die gelesen und verstanden
							    	<a href="terminosyCondiciones.pdf" target="_blank" class="a-terminos">Bedingungen für Dienstleistungen</a>
							  </div>
						  <br>
						  <input class="inputEnviar" type="button" name="registrar" value="Anmelden" id="registrar"/>
				</form>
			</div>







			<div id="registroCompleto" style="display: none; text-align: center;">

				Der neue Benutzer hat sich erfolgreich registriert und kann jetzt Serviceanfragen stellen. Zugangsdaten wurden an Ihre E-Mail gesendet.

				<br><br>
				<a href="../app/serviciosIndex.php"><input class="inputEnviar" type="button" name="registrar" value="Service anfordern" /></a>

			</div>


			<div id="usuarioYaRegistrado" style="display: none; text-align: center;">

				Die eingegebene Mail ist bereits in unserem System registriert. Wenn Sie bereits über ein Konto verfügen und sich Ihr Passwort nicht merken, können Sie dies tun <a href="recuperarPass.php" style="color: #184c73;">Wiederherstellen Sie Ihr Konto "hier"</a>.

				<br>

				<input class="inputEnviar" type="button"  value="Akzeptieren" id="aceptarYaRegistrado"/>

			</div>








		</div>
	</div>








	<div class="quienesSomos oculto" id="conocenos2">

		<div class="titulo">
			<font class="tipo-letra"><b>ÜBER UNS </b></font>
			<br>
			<font class="tipo-letra-dos"><b>UND UNSER GESCHÄFT</b></font>
			<br>
			<p class="tipo-letra-tres">FENET (Vertrauen in das Netzwerk) ist eine von Systems Admins C.A. entwickelte Plattform. Dies ermöglicht seinen Kunden und Benutzern, professionelle Dienstleistungen oder Produkte anzufordern und sie zu planen oder an einen beliebigen Ort zu leiten. Unsere Aufgabe ist es, Unternehmen und Personen, die Produkte und Vertragsservices erwerben müssen, mit anderen Dienstleistern, Unternehmen, technischen Spezialisten oder Vertriebspartnern zu verbinden.</p>
		</div>


		<div class="caracteristicas">
			<div class="inline-block">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/profesional.png"></div>
				<div class="texto-crctc tipo-letra-cuatro">
					<b>PROFESSIONALISMUS</b>
					<br>
					<p class="tipo-letra-tres">Unser Beraterteam ist bereit, Serviceanfragen durch Kontaktaufnahme mit qualifizierten Technikern und spezialisierten Unternehmen zu bearbeiten.</p>
				</div>
			</div>
			<div class="inline-block margin-left">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/honestidad.png"></div>
				<div class="texto-crctc tipo-letra-cuatro">
					<b>Ehrlichkeit </b>
					<br>
					<p class="tipo-letra-tres">Die von FENET empfohlenen Dienstleister wurden zuvor von unserem Team kontaktiert und interviewt.</p></div>
			</div>
			<div class="inline-block-dos">
				<div class="imagen-crctc"><img class="icono" src="../img/ionos/atencion.png"></div>
				<div class="texto-crctc-dos tipo-letra-cuatro">
					<b>PERSÖNLICHE AUFMERKSAMKEIT</b>
					<br>
					<p class="tipo-letra-tres">Unsere FENET-Berater stehen Ihnen rund um die Uhr zur Verfügung und begleiten Sie bei der Akquisition und Vergabe von professionellen Dienstleistungsunternehmen.</p>
				</div>
			</div>
		</div>
	</div>
