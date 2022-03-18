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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <link rel="icon" type="image/png" href="../site/img/lun.png">
        <link href="css/estilos.css"  rel="stylesheet" type="text/css">
    </head>
    <body>

    
    <nav class="navbar ml-auto navbar-expand-lg navbar-light bg-dark " style='background-image:url(../vida/img/starfield-banner.jpg);' >
        <div style='margin: 0 auto; color: white;'>Configura el Stock de tu tienda</div>
    </nav>


<?php
     $email = $_POST['email'];
     $nombreMarca = $_POST['nombreMarca'];
?>


<div id='contenidoStock'>

        

        <form method='post' action='cargarnombre.php'>
        <div style='margin:0 auto; margin-top:35px; width:600px;'>
        <div>
            <img src='img/felicitacion.jpg' width='400'/>
        </div>
            <div>
                    <b>Ya tienes tu propia tienda con todos con los articulos de las marcas que elegiste.</b>
                    Cuando quieras puedes crear tu propia marca con tu linea de productos desde el modulo administrador. 
           </div>
            <br>
           <!--
           <br>
           <div>
                   <b>Te notificaremos cada vez que que registremos una nueva marca</b>, si tienes alguna duda comunicate con nostros, te ayudaremos. 
           </div>
           <br>
           <div>
                    Completa tus datos para finalizar la configuracion del modulo administrador de tu tienda.
           </div>
            -->

            <input type='hidden' value='<?php echo $_POST['email']; ?>' name='email'>
            <input type='hidden' value='<?php echo $_POST['nombreMarca']; ?>' name='nombreMarca'>
             <br>
            <button class="btn btn-primary">Completar Datos</button>
        </div>
        </form>
</div><!--Fin de contenido-->    

    </body>
</html>