<?php
  include ("componentes/head.php")
?>

<body>


<nav style="margin-top: 20px; margin-bottom: 100px;">
  <div id="logo"><img src="../img/logo3.png" height="70px;"></div>


    <ul id="opciones" style="background-color: none; text-align: right; margin-right: 25px;">
      <!--
      <li id="item"><a href="#conocenos">Conocenos</a></li>
      <li id="item"><a href="#proveedor">Proveedores</a></li>
      <li id="item"><a href="#escribenos">Contactanos</a></li>
      -->
      <li id="item"><a href="index.php" style="color: black;">Home</a></li>
      <a href="app/index.php"><li id="item" class="iniciarSeccion">Iniciar Sesión</li></a>
    </ul>

  <a href="#"><div id="iconSmart" id="iconSmart"><img src="../img/menu.png" height="35px;"></div></a>
</nav>




<div id="menuSmart">
  <!--
  <a href="#conocenos2"><div>Conocenos</div></a>
  <hr>
  <a href="#proveedor"><div>Proveedor</div></a>
  <hr>
  <a href="#escribenos"><div>Contactanos</div></a>
  <hr>
-->
  <a href="index.php"><div>Home</div></a>
  <hr>
  <a href="app/index.php"><a href="#"><div>Iniciar Sesión</div></a></a>
  <hr>
</div>









































<div class="" style="background-color: none;">

<?php
    if (isset($_POST['recuperar'])){


      include ("app/cnx.php");
      $email = $_POST['email'];
      $ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");

      if (mysql_num_rows($ssql)>0){
      $pass = mysql_result($ssql,0,"pass");

        ?>
           <div style="height: 100px; width: 100%; text-align: center; background-color: #1ca462; color: white; padding-top:25px; "><h3>"Recuperación Exitosa"</h3></div>

                     <div style="width: auto; height: auto; background-color: none; margin: 0 auto; padding-top: 50px; text-align: center;">

                        <h4>Contraseña Reenviada</h4>
                          <br><br>
                          <div style="width: 100%; text-align: center; margin-bottom: 50px;">Se ha enviado un email a la direccion de correo registrada con los datos de acceso a su cuenta. En caso de no encontrar el email mencionado por favor revise su bandeja de correos no deseados o badeja spam. </div> <br><br>                                                
                     </div>
        <?php




          $body2 = 'Saludos Cordiales:
              
                Sus datos de acceso para ingresar a su cuenta FENET son los siguientes:
                
                    Usuario:  '.$email.'
                    Password: '.$pass.'
                  
                 Usted puede cambiar su clave cuando guste desde su cuenta FENET en la seccion Perfil en el menu de opciones.       
                
          
                  Si en algun momento usted tiene alguna duda o necesita de apoyo tecnico personalizado puede contactar nuestros Asesores en la opcion Contactar Asesor. Nuestros especialistas estan listos para atenderles 24/7.
                    
                    Si usted no solicito la recuperacion de los datos por favor informenos al email info@fenet.com.ve.
                    
                      ';


              $para2= $email;
              $asunto2  = "Recuperacion de Cuenta FENET";              
              $mensaje2   = $body2;
              $cabeceras2 = "From: " . "info@fenet.com.ve" . "\r\n";

              mail ($para2, $asunto2, $mensaje2, $cabeceras2);





      }
      else{
         ?>

                  <div class="container-fluid">

                    <h2 style="text-align: center; margin-top: 100px;">Recupera tu cuenta</h2>
                    <div class="row">
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4" style="background-color: none; height: auto; text-align: none; margin-top: 50px; margin-bottom: 100px; text-align: center;">
                        
                        <form method="post" action="#">
                          <label>Coloca la direccion de correo electronico registrada.</label><br><br>
                          <input type="email" name="email" placeholder="tu@correo.com">
                          <p><font color="red">El correo ingresado no se encuentra registrado.</font></p>
                          <br><br>
                          <input class="inputEnviar" type="submit" name="recuperar" value="Recuperar Contraseña" style="height: 30px; ">
                        </form>

                        <br><br>

                      <div class="col-lg-4"></div>
                    </div>
                  </div>
                  </div>

        <?php
      }
      




      
    }
    else
    {
        ?>

                  <div class="container-fluid">

                    <h2 style="text-align: center;">Recupera tu cuenta</h2>
                    <div class="row">
                      <div class="col-lg-4"></div>
                      <div class="col-lg-4" style="background-color: none; height: auto; text-align: none; margin-top: 50px; margin-bottom: 100px; text-align: center;">
                        
                        <form method="post" action="#">
                          <label>Coloca la direccion de correo electronico registrada.</label><br><br>
                          <input type="email" name="email" placeholder="tu@correo.com">
                          <br><br>
                          <input class="inputEnviar" type="submit" name="recuperar" value="Recuperar Contraseña" style="height: 30px; ">
                        </form>

                        <br><br>

                      <div class="col-lg-4"></div>
                    </div>
                  </div>
                  </div>

        <?php
    }


?>


</div>




<?php
  include ("componentes/contacto.php");
?>





<footer><b>Systems Admins C.A Todos los Derechos Registrados</b></footer>















































<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
 crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>




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







  $("#enviarMensaje").click(function () {

    var mensajeNombre = $("#nombreApellido").val();
      var mensajeCorreo = $("#emailForm").val();
      var mensajeTelefono = $("#mensajeTelefono").val();
      var mensaje = $("#mensaje").val();

      if (mensajeNombre == "" || mensajeCorreo == "" || mensajeTelefono == "" || mensaje == ""  ){
        $("#spamMensaje").text("Complete todos los campos para enviar el mensaje");
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



</body>
</html>
