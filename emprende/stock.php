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
/*
    $_POST['email'];
    
     $_POST['nombreNegocio'];
    
     $_POST['dominio'];
*/
?>


<div id='contenidoStock'>
        <form method='post' action='productos.php'>
            <div>
                <img src='img/stock.jpg' width='300'/>
            </div>
            <div>
                <b>¿Quieres tener stock digital de otras marcas y tiendas configuradas en AveLun o quieres vender solo tus productos y articulos?</b>
                <br>
                <br>
                <input type="radio" name="productos" value="si" checked> Si, quiero vender los productos existentes en AveLun
                <br>
                <br>
                <input type="radio" name="productos" value="no"> No, vendere solo mis productos y articulos
                <br>
                <input type='hidden' value='<?php echo $_POST['email']; ?>' name='email'>
                <input type='hidden' value='<?php echo $_POST['nombreNegocio']; ?>' name='nombreNegocio'>
                <input type='hidden' value='<?php echo $_POST['dominio']; ?>' name='dominio'>
                <br>
                <button class="btn btn-primary">Siguiente</button>
            </div>
        </form>
</div><!--Fin de contenido--> 

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conoce la Mision Artemis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        La LunarGateway se mantendra orbitando la luna y servira como centro de investigacion y estacion de transito entre el viaje Tierra-Luna. 
        <br>
        <img src='img/artemis3.jpg' style='width:100%'/>
            <a href='https://stem.nasa.gov/artemis/' target='_blank' style='font-size:10px;'>Picture Cortesy by NASA</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>  
    <script>
    $(document).ready(function()
    {
        //$("#Modal").modal("show");
    });
    </script>

    </body>
</html>