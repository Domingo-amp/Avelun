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
  <link rel="icon" type="image/png" href="site/img/lun.png">


  
<!--
<link href="css/bootstrap.min.css"  rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<link href="aterrizaje.css"  rel="stylesheet" type="text/css">

<script type="text/javascript">

    function openModal(){
    document.getElementById('desapear').style.display='block';
    document.getElementById('btndesapear').style.display='none';
    document.getElementById('btndesapearDos').style.display='block';
}

    function closeModal(){
    document.getElementById('desapear').style.display='none';
    document.getElementById('btndesapear').style.display='block';
    document.getElementById('btndesapearDos').style.display='none';
}


    function openModalArtemis(){
    document.getElementById('desapearArtemis').style.display='block';
    document.getElementById('btndesapearArtemis').style.display='none';
    document.getElementById('btndesapearArtemisDos').style.display='block';
}

    function closeModalArtemis(){
    document.getElementById('desapearArtemis').style.display='none';
    document.getElementById('btndesapearArtemis').style.display='block';
    document.getElementById('btndesapearArtemisDos').style.display='none';
}

</script>

</head>
<body>

<div class="Avelun">

    <img class="ttile" src="http://avelun.com/nasa/avelun2.png" width="200" alt="#"/>

    <div id="desapear">

    <h5>En AveLun  Te ayudaremos a crecer profesionalmene, personalmente, verte bien, sentirte bien y vivir de forma saludable</h5>
    <h5>Conoceras mentoras profesionales que te ayudaran a crecer</h5>

    <a href="http://avelun.com/indexAvelun.php"><button type="button" class="btn btn-light hover">Entrar en AveLun</button></a>
    </div>

    <button type="button" onclick="openModal()" id="btndesapear" class="btn btn-danger">Ver mas</button>

    <button type="button" onclick="closeModal()" class="btn" id="btndesapearDos" >^</button>

</div>

<div class="Artemis">

    <img class="ttile" src="http://avelun.com/nasa/artemis.png" width="145" alt="#"/>

    <div id="desapearArtemis">

    <h5>El Programa Artemis de la NASA llevara al proximo Hombre y la primera Mujer a la Luna en 2024</h5>
    <h5>Queremos contarte todo lo que esta sucediendo</h5>

    <div class="conten">
        <img src="http://avelun.com/nasa/nasa.png" width="80" alt="#"/>
        <div class="frase"><i>"Science will be integral to Artemis mission, and we look forward to planning missions of human and scientific discovery that draw on the thoughful work of this team"</i>... <br>Kathy Lueders<div class="textocult"> Human spaceflight program as the Associate Administrator of the Human Exploration and Operation Mission Directorate.</div></div>
    </div>

    <a href="https://stem.nasa.gov/artemis/"><button type="button" class="space btn btn-danger">Conce el Programa Artemis</button></a>

    </div>

    <button type="button" onclick="openModalArtemis()" id="btndesapearArtemis" class="btn btn-danger">Ver mas</button>

    <button type="button" onclick="closeModalArtemis()" class="btn" id="btndesapearArtemisDos">^</button>

</div>

</body>
</html>