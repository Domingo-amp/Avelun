<?php
  session_start();
  if ($_SESSION['login']){
      include ("cnx.php");          
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/mediastyle.css">
    <style>
    header{width: 382px; height:auto; background-color: white; margin: 0 auto; border-top-right-radius:30px; border-top-left-radius:30px; border-top:3px solid black; border-right:3px solid black; border-left:3px solid black;}
    section{
      width: 382px; 
      min-height: 533px;
      background-color: white; 
      margin: 0 auto; 
      border-right: 3px solid black;
      border-left:3px solid black;
    }


    .asesor{
      width: 382px; 
      height: 60px; 
      margin: 0 auto; 
      background-color: green; 
      border-bottom-right-radius: 25px; 
      border-bottom-left-radius: 25px; 
      border-right:3px solid black;
      border-left:3px solid black;
      border-bottom: 3px solid black;
      font-size: 20px; 
      color: white; 
      padding-top: 15px; 
      text-align: center; 
      cursor: pointer;}

    .asesor:hover{background-color:#006837; }

    .btn_aceptar{
        height: 30px;
        width: 250px;
        background-color: #00A1B5;
        margin: 0 auto;
        text-align: center;
        color: white;
    }

    @media (max-width:800px){

    header{width: 100%;}

    section{width: 100%;}

    .asesor{width: 100%;}
    </style>
    <title>Fe at Network!</title>
  </head>
  <body style=" background-color: #549cb4;">
<header>
<?php
    include ("menu.php");
?>
</header>
<section>
<div id="ocultador" style="background-color: white; opacity: 0.5; display: none; width: 285px; height: 50px; position: fixed; top: 156px; left: 50%; z-index: 200; margin-left: -182px;"></div>
<?php
$ssql = mysql_query("SELECT * FROM usuario WHERE email='$email'");           
$idUsuario  =  mysql_result($ssql,0,"id");
$servicio    = $_POST['servicio'];
$proveedor    = $_POST['proveedor'];
$email = $_SESSION['login'];
/*
  $ssql = mysql_query("SELECT * FROM seguimientos WHERE  cliente='$idUsuario' and servicio='$servicio'");           
  $seguimientos  =  mysql_result($ssql,0,"seguimiento");
  echo $seguimiento = $seguimientos+1; 
  */ 
 ?>
<div style="padding-top: 50px;"></div>
    <p style="width: 100%; text-align: center; margin-bottom: 20px;"><b>Seguimiento del Servicio</b></p>
    <form method="post" action="#">
      <input type="submit" name="completado" value="SERVICIO CONCLUIDO" style="width: 200px; background-color: red; height: 30px; border-radius: 10px; cursor: pointer; margin-left:85px;"> 
         <input type="hidden" name="servicio" value="<?php echo $servicio; ?>"/>
         <input type="hidden" name="proveedor" value="<?php echo $proveedor; ?>"/>
      </form>
      <?php if (isset($_POST['completado'])){ ?>
          <div style=" background-color: none; margin-top: 20px; text-align: center;">Califica el Proveedor
            <form method="post" action="servicioConcluido.php">
              <input type="hidden" name="proveedor2" value="<?php echo $_POST['proveedor']; ?>"/>
              <input type="hidden" name="servicio2" value="<?php echo $_POST['servicio']; ?>"/>
              <div style="display: inline-block; background-color: none; margin-right: 20px;"><input type="image" name="positivo" src="img/positivo.jpg" width="50px" />   </div>
              <div style="display: inline-block; background-color: none"><input type="image" name="negativo" src="img/negativo.jpg" width="50px"/></div>
            </form>
        </div>
      <?php
        }
      ?>
<br>
<div style="width: 300px; text-align: center;  background-color: none;" >
<form action="#" method="post">
  <input type='hidden' name='servicio'  value="<?php echo $servicio ?>">
  <input type='hidden' name='proveedor'  value="<?php echo $proveedor ?>">
  <input type='button' id="actualizarChat" value='Actualizar Chat' name="actualizar" style="background-color:#63be33; color: white; height: 30px; width: 125px; border-radius: 5px;" />  
</form>
<br>
                <form id="formCliSend" action="#" method="post">
                    <?php
                        /*Aqui se obtiene ultimo id o numero de seguimiento para este ticket para sumarle uno y guardar en la tabla de seguimiento para referencia del nuevo seguimiento*/         
                    ?>
                    <input type="hidden" name="servicio" value="<?php echo $servicio; ?>"/>
                    <input type="hidden" name="cliente2" value="<?php echo $cliente; ?>"/>
                    <input type="hidden" name="seguimiento2" value="<?php echo $seguimiento; ?>"/>
                    <input type="hidden" name="proveedor" value="<?php echo $proveedor; ?>"/>
                    <input type="hidden" id="fecha2" name="fecha2" value=""/>
                    <input type="hidden" id="hora2" name="hora2" value=""/>
                    <input type="hidden" name="ticket" value="<?php echo $ticket; ?>"/>
                    <textarea name="contenido" id="textarea1" placeholder="Escribir Comentario" style="width: 230px; height: 50px; background-color: #f2f2f2;"></textarea>
                    <input class="btm_abrirTicket" type="button" name="seguir" value="Enviar" style="background-color:#63be33; color: white; width: 50px; height: 50px; top: 10px; vertical-align: top; cursor: pointer;" />
                </form>
<!---------------------------------BLOQUE DE GUARDADO DE SEGUIMIENTO, MENSAJE Y CORREO-------------------------------------------------------------->
                <span id="smsRes" style="display: none;">
                    <h4 style="color: green;">El nuevo seguimiento ha sido reportado con exito...</h4>
                </span>
<!---------------------------------FINBLOQUE DE GUARDADO DE SEGUIMIENTO, MENSAJE Y CORREO----------------------------------------------------------->
<!------------------------------------------------- LISTA DE CHAT O SEGUIMIENTOS ---------------------------------------------->
    <table id="historiaChatCli" border='0' bordercolor='blue' align='center' width='100%'></table>
<!------------------------------------------------- LISTA DE CHAT O SEGUIMIENTOS ---------------------------------------------->
</div>
<br>
</section>
<a href="asesor.php"><div class="asesor">Contactar Asesor</div></a>


    <!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script-->
	<script src="https://code.jquery.com/jquery-1.8.3.min.js" integrity="sha256-YcbK69I5IXQftf/mYD8WY0/KmEDCv1asggHpJk1trM8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function tiempoRecarga(){
        var id = setInterval(function(){ chatCli(); $("#smsRes").css("display","none");}, 5000);
        return id;
    }
    function chatCli(){
        var aux = '<?php echo $servicio; ?>';
        $.post("historiaChatCli.php", {servicio: aux },function(data){
            $("#historiaChatCli tr").remove();
            $("#historiaChatCli").html(data);
        });
    }
    function getFechaHora(){
        var d = new Date();
        var fecha = d.getDate()+'-'+(d.getMonth()+1)+'-'+d.getFullYear();
        var hora = d.getHours()+':'+d.getMinutes()+':'+d.getSeconds();
        $("#hora2").val(hora);
        $("#fecha2").val(fecha);
    }
  $(document).ready(function() { 
    tiempoRecarga();
    chatCli();
    $("#actualizarChat").click(function(){
        chatCli();
    });
    $(".btm_abrirTicket").click(function(){
        getFechaHora();
        var formData = new FormData(document.getElementById("formCliSend"));
        $.ajax({
            url: "senderSmsChatCli.php",
            beforeSend: function() {$("#ocultador").css("display","block");$("#smsRes").css("display","none");},
            type: "post",
            dataType: "html",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(res){
            if(res == true){
                getFechaHora();
                $("#textarea1").val('');
                $("#ocultador").css("display","none");
                $("#smsRes").css("display","block");
                chatCli();
            }
        });
    });
});
</script>
  </body>
</html>
<?php
}else{
  header("location:index.php");
}
?>