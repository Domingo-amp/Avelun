

<script type="text/javascript">





$(function(){

//var ventana_ancho = $(window).width();
//$("#tamano").text(ventana_ancho);


	$("#iconSmart").click(function () {

		var menuSmartDisplay = $("#menuSmart").css("display");

		if (menuSmartDisplay == "none"){
			$("#menuSmart").css("display", "block");
		}else if (menuSmartDisplay == "block"){
			$("#menuSmart").css("display", "none");
		}

	});







	$("#registrar").click(function () {


		var nombre = $("#nombre").val();
	    var apellido = $("#apellido").val();
	    var email = $("#email").val();
	    var pass = $("#pass").val();
	    var telefono = $("#telefono").val();
	    var pais = $("#pais").val();
	    var estado = $("#estado").val();


	    var terminos = document.getElementById("terminos").checked;



	    if (nombre == "" || apellido == "" || email == "" || pass == "" || telefono == "" ){
	    $("#spamCondicion").text("Você deve preencher todas as informações de registro");
		}else{
			var datos = "aceptado";
		}


	    if (terminos == false){
	    	$("#spamTerminos").text("Aceite os termos e condições do serviço");
	    }else if (terminos == true){
	    	var terminos = "aceptado";
	    }





	    if ( datos == "aceptado" && terminos == "aceptado"){

	    	 document.getElementById("registrar").disabled = true;


	    	  $.ajax({type : "POST",
              url  : "../phpquery/registro.php",
              data : ({
                        nombre:nombre,
                        apellido:apellido,
                        correo:email,
                        pass: pass,
                        telefono:telefono,
                        pais:pais,
                        estado:estado
                      }),
              cache:false,
              dataType :"text",
              //success  : Enviamos
              success:  function (response) {



                                if (response == "usuarioRegistrado")
                                {

                                	 $("#formulario").css("display", "none");
                                 	$("#usuarioYaRegistrado").css("display", "block");


                                }
                                else{

                                 	 $("#formulario").css("display", "none");
                                 	$("#registroCompleto").css("display", "block");

                                }




                                }
            }).error(errorServidor);
	    }
	});







	$("#aceptarYaRegistrado").click(function () {
		$("#formulario").css("display", "block");
        $("#usuarioYaRegistrado").css("display", "none");
        document.getElementById("registrar").disabled = false;
	});




	$("#enviarMensaje").click(function () {

		var mensajeNombre = $("#nombreApellido").val();
	    var mensajeCorreo = $("#emailForm").val();
	    var mensajeTelefono = $("#mensajeTelefono").val();
	    var mensaje = $("#mensaje").val();

	    if (mensajeNombre == "" || mensajeCorreo == "" || mensajeTelefono == "" || mensaje == ""  ){
	    	$("#spamMensaje").text("Preencha todos os campos para enviar a mensagem");
		}else{

			document.getElementById("registrar").disabled = true;


			$.ajax({type : "POST",
              //url  : "http://fenet.com.ve/phonegap/registro.php",
              url  : "../phpquery/mensaje.php",
              data : ({
                        nombreApellido:mensajeNombre,
                        email:mensajeCorreo,
                        telefono:mensajeTelefono,
                        mensaje:mensaje
                      }),
              cache:false,
              dataType :"text",
              //success  : Enviamos
              success:  function (response) {

                            $("#escribenos").css("display", "none");
							$("#mensajeEnviado").css("display", "block");

                                }
            }).error(errorServidor);




		}



	});




	$("#enviarOtroMensaje").click(function () {


		$("#escribenos").css("display", "block");
		$("#mensajeEnviado").css("display", "none");

		$("#nombreApellido").val("");
	    $("#emailForm").val("");
	    $("#mensajeTelefono").val("");
	    $("#mensaje").val("");
	    $("#spamMensaje").text("");

        document.getElementById("registrar").disabled = false;
	});





});//Fin de Funcion Jquery






</script>

