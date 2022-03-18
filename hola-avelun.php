<!DOCTYPE html>
<html>
<head>
	<title>Avelun</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name=”description” content="Avelun es el mejor sitio para mujeres, encontrar una tienda online, consultorias medicas, farmacologicas, mentorias, ayudas profesionales y mas" />
  <meta name="keywords" content="tienda, ropa, calzado, joyeria, zapatos, moda, salud, medicina"/>
  <meta name="author" content="Systems Admins C.A" />
  <meta name="copyright" content="Systems Admins C.A" />
  <meta name="robots" content="index, follow">
  <meta name="google" content="nositelinkssearchbox">
  <link rel="icon" type="site/image/png" href="img/lun.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>

body {
    padding-top: 50px;
    text-align:center;
    background-color:black;
    color: white; 
    font-size:20px;
}

.banner{
    width: 100%;
    height:250px;
    background-color:black;
    margin-bottom:80px;
}

.formIZ{
    width: 300px;
    height: auto;
    background-color:white;
    display:inline-block;
    vertical-align:top;
    margin-right:100px;
}

.formDE{
    width: 300px;
    height: 100px;
    background-color:white;
    display:inline-block;
    vertical-align:top;
    text-align:justify;
}

.form1{
  text-align:justify;
  margin:0 auto;
  width:360px;
}


.atten{
  border:solid white 3px;
  color:white;
  width:200px;
  height:50px;
  padding-top:5px;
  margin: 0 auto;
  border-radius:10px;
}

h1{
  color:yellow;
  padding-left:100px;
  padding-right:100px;
  font-size:50px;
}

.p2{
  padding-left:80px;
  padding-right:80px;
  font-size:25px;
  margin-top:50px;
  margin-bottom:50px;
}

.ContForm{
  width:600px;
  height:auto;
  background-color:white;
  border-radius:10px;
  margin:0 auto;
  color:black;
  padding-left:50px;
  padding-right:50px;
}

.ContForm h4{
  color:black;
}

.cargar{
  width:100%;
  height:70px;
  font-size:30px;
}

.SecondCont{
  width:100%;
  height:auto;
  background-color:#A21236;
  padding-bottom:40px;
}

.DivInfo{
  width:900px;
  height:250px;
  background-color:white;
  margin:0 auto;
  border-radius:20px;
  margin-bottom:40px;
  margin-top:20px;
}

.InfoImg{
  width:40%;
  height:180px;
  border-radius:20px;
  margin-left:30px;
  margin-top:30px;
  background-color:red;
  float:left;
}

.TextInfo{
  width:50%;
  height:auto;
  margin-left:2%;
  margin-top:30px;
  float:left;
  color:purple;
}

.TextInfo p{
  padding-top:20px;
  padding-left:20px;
  text-align:justify;
}

.textFooter{
  width:100%;
  height:200px;
  background-color:black;
  color:white;
  padding:50px;
  padding-left:80px;
  padding-right:80px;
  font-size:18px;
}

@media (max-width:1000px){

  .ContForm{
  width:80%;
  height:auto;
  background-color:white;
  border-radius:10px;
  margin:0 auto;
  color:black;
  padding-left:50px;
  padding-right:50px;
}

  .DivInfo{
  width:80%;
  height:auto;
  background-color:white;
  margin:0 auto;
  border-radius:20px;
  margin-bottom:40px;
  margin-top:20px;
  padding-bottom:30px;
}

.InfoImg{
  width:100%;
  height:180px;
  border-radius:20px;
  margin-left:0px;
  margin-top:0px;
  margin:0px auto;
  background-color:red;
  float:none;
}

.TextInfo{
  width:100%;
  padding-left:20px;
  padding-right:30px;
  text-align:justify;
  height:auto;
  margin-left:0px;
  margin-top:0px;
  margin:0px auto;
  float:none;
  color:purple;
}

}

@media (max-width:720px){
.formIZ{
    width: 100%;
    padding-left:80px;
    padding-right:80px;
    margin-right:0px;
}

.formDE{
    width: 100%;
    padding-left:80px;
    padding-right:80px;
}
}


@media (max-width:600px){
.ContForm{
  width:100%;
  height:auto;
  background-color:white;
  border-radius:10px;
  margin:0 auto;
  color:black;
  padding-left:50px;
  padding-right:50px;
}

h1{
  font-size:25px;
  padding: none;
  margin-left:0px;
}

.cargar{
  font-size:20px;
}

.form1{
  text-align:justify;
  margin:0 auto;
  width:100%;
}

}


@media (max-width:400px){

h1{
  font-size:25px;
  padding: none;
  margin-left:-20px;
}
}




</style>

</head>

<body>




<?php

require ('cnx.php');

if(isset($_POST['cargar'])){


  if (is_array($_POST['interes'])) {
    $selected = '';
    $num_interes = count($_POST['interes']);
    $current = 0;
    foreach ($_POST['interes'] as $key => $value) {
        if ($current != $num_interes-1)
            $selected .= $value.', ';
        else
            $selected .= $value.'.';
        $current++;
    }
}
else {
    $selected = 'N/A';
}


  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $ssql = "SELECT * FROM leads WHERE email='$email'";
  $rs = $conexion->query($ssql);

  if (mysqli_num_rows($rs)>0)
        { 
          
          echo "<div style='width: 100%; text-align: center;''><h4 style='color: red; margin-top: 50px; display: inline-block;''>Este Email ya esta registrado!!</h4></div><br>";

  }else{

          echo "<div style='width: 100%; text-align: center;''><h4 style='color: green; margin-top: 50px; display: inline-block;''>Gracias por enviarnos la informacion!!</h4></div><br>";
          $conexion->query("INSERT INTO leads VALUES (
                '',
                '$email',
                '$nombre',
                '$selected',
                NOW()
                )");
    
    }


}

?>






<image src="http://avelun.com/nasa/avelun2.png" width="150"/>
<br><BR>
<p>WE CAN BUILD THE FUTURE</p>

<h1><br>Te ayudaremos a Crecer Profesionalmente, Crecer Personalmente, Verte Bien, Sentirte Bien y Vivir de Forma Saludable</h1>

<p class="p2">En AveLun conocerás mentoras profesionales que han tenido un increíble desarrollo en su vida Profesional y Personal, queremos que junto con ellas alcances el éxito así como ellas lo lograron.</p>

<div class="ContForm">
<br>
  <h4>Selecciona que te gustara aprender</h4>







<br>

  <form method='post' action='#'>

    

  <div class="form1">

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="interes[]" value="Crecimiento Profesional">
      <label class="form-check-label">
        Crecimiento Profesional
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="interes[]" value="Crecimiento Personal">
      <label class="form-check-label">
        Crecimiento Personal
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="interes[]" value="Verse Bien">
      <label class="form-check-label">
        Verte Bien
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="interes[]" value="Sentirse Bien">
      <label class="form-check-label">
        Sentirte Bien
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="interes[]" value="Cuidar tu Salud">
      <label class="form-check-label">
        Cuidar tu Salud
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="interes[]" value="Iniciar tu propio negocio con asesoria.">
      <label class="form-check-label">
        Iniciar tu propio negocio con asesoría.
      </label>
    </div>  

  </div>




    <br><br>


    <div class="form-group">
      <input type="text" class="form-control" name="nombre" placeholder="¿Cual es tu Nombre?" required>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" name="email" placeholder="¿Cual tu correo electronico?" required>
    </div>
  
     
<br>
<button type="submit" name="cargar" class="btn btn-primary cargar">ENVIAR MIS RESPUESTAS</button>
</form>
<br><br>
</div>
<br><br>

<div class="SecondCont">
<br>
<h2>Esto es lo que encontraras en AveLun</h2>
<br><br>
<h2>Crecimiento Profesional</h2>
<div class="DivInfo">
  <image src="http://avelun.com/site/img/leads/profesional.PNG" class="InfoImg" />
  <div class="TextInfo">
    <!--<h3>Conoce Nuestras Mentoras</h3>-->
    <p>Una carrera profesional exitosa es lo que queremos cuando pensamos en alcanzar el éxito. Ser exitoso profesionalmente significa estar en un constante aprendizaje para superar los retos que se presenten.</p>
  </div>
</div>

<h2>Crecimiento Personal</h2>
<div class="DivInfo">
  <image src="http://avelun.com/site/img/leads/personal.PNG" class="InfoImg" />
  <div class="TextInfo">
       <!--<h3>Conoce Nuestras Mentoras</h3>-->
      <p>El éxito no solo depende de tu carrera profesional. Es importante tener armonía en tu persona para lograr un equilibrio entre tu trabajo y la vida personal.</p>
  </div>
</div>

<h2>Verse Bien</h2>
<div class="DivInfo">
  <image src="http://avelun.com/site/img/leads/verteBien.PNG" class="InfoImg" />
  <div class="TextInfo">
      <!--<h3>Conoce Nuestras Mentoras</h3>-->
      <p>Sabemos que te importa tu look y cuidarte a ti misma. Sin olvidar que la verdadera belleza proviene de tu interior, te daremos tips profesionales para que refuerces tu belleza exterior.</p>
  </div>
</div>

<h2>Sentirse Bien</h2>
<div class="DivInfo">
  <image src="http://avelun.com/site/img/leads/sentirteBien.PNG" class="InfoImg" />
  <div class="TextInfo">
      <!--<h3>Conoce Nuestras Mentoras</h3>-->
      <p>¿Cómo ​te sientes contigo misma, con la naturaleza y las personas que te rodean? Te ayudaremos a alcanzar el equilibrio mente-cuerpo para que experimentes el sentirte bien.</p>
  </div>
</div>

<h2>Cuidar tu Salud</h2>
<div class="DivInfo">
  <image src="http://avelun.com/site/img/leads/cuidaTuSalud.PNG" class="InfoImg" />
  <div class="TextInfo">
    <!--<h3>Conoce Nuestras Mentoras</h3>-->
    <p>Tener salud física y mental es lo más importante en tu proceso de crecimiento. Queremos ayudarte a conseguirlo, estamos trabajando en colaboración con expertos para ofrecerte herramientas para cuidar tu salud.</p>
  </div>
</div>

<h2>Iniciar tu Propio Negocio con Asesoría</h2>
<div class="DivInfo">
  <image src="http://avelun.com/site/img/leads/teinda.PNG" class="InfoImg" />
  <div class="TextInfo">
    <!--<h3>Conoce Nuestras Mentoras</h3>-->
    <p>AveLun Emprende esta pensado para ayudarte a crear tu propio negocio y facilitarte todas las herramientas que necesitas para llevarlo a cabo, incluyendo mentorías profesionales gratuitas, pagadas y cursos profesionales.</p>
  </div>
</div>
</div>

<div class="textFooter">
<image src="http://avelun.com/nasa/artemis.png" width="150"/>
<br><br>

<p>
La Misión Artemis llevará al Próximo Hombre y la primera Mujer a la luna en 2024. 
<br><br>
En AveLun estamos comprometidos con la Misión Artemis y queremos contarte todo lo que está sucediendo para que nos acompañes en esta increíble aventura. 
</p>
<br><br>
</div>

</body>

</html>