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


        <script>

            function iramitienda(){
                var email = miVariableEnJavaScript;
                var weAreGoingToTheMoon = nuesrtraMarca;
                //var email = document.getElementById('email').value;
                //var email = 'enriquemendoza162@gmail.com';
                var password = document.getElementById('password').value;
                var gerente = document.getElementById('nombre').value;
                var telefono = document.getElementById('telefono').value;
                var pais= document.getElementById('pais').value;
                


                var url = 'upbdpass.php';
                var data = {correo: email, pass: password, nombre: gerente, phone: telefono, localidad: pais};

                fetch(url, {
                method: 'POST', // or 'PUT'
                body: JSON.stringify(data), // data can be `string` or {object}!
                headers:{
                    'Content-Type': 'application/json'
                }
                }).then(res => res.json())
                .catch(error => console.error('Error:', error))
                //.then(response => console.log('Success:', response));
                .then(response => {
                    console.log('Success:', response);
                    var locationSite = 'http://www.avelun.com/sites/' + weAreGoingToTheMoon;
                    window.location = locationSite;
                    //alert(response);
                });

                
            }
        </script>


    </head>
    <body>


<?php
    $email = $_POST['email'];
    $nombreMarca = $_POST['nombreMarca'];
?>



<script type="text/javascript">
    const miVariableEnJavaScript = "<?php echo $email ?>";
    const nuesrtraMarca = "<?php echo $nombreMarca ?>";
</script>



<nav class="navbar ml-auto navbar-expand-lg navbar-light bg-dark " style='background-image:url(../vida/img/starfield-banner.jpg);' >
        <div style='margin: 0 auto; color: white;'>Completa tus datos</div>
    </nav>

    <div  style='text-align:center; margin-top:50px;'>
            <div>
                    <img src='img/registro.jpg' width='150'/>
                </div>
            <div>

        <div  style='text-align:right;  width:430px; margin: 0 auto; margin-top:30px;'>
            <div>
               <label>Tu usuario AveLun es:</label>
               <input type='text' name='nombre' id='email' value=' <?php echo $email ?>' disabled>
           </div>
           <div style='margin-top:7px;'>
               <label>Ingresa tu contrasena</label>
               <input type='password' id='password' >
           </div>
           <div style='margin-top:7px;'>
               <label>Cual es tu Nombre?</label>
               <input type='text' id='nombre' >
           </div>
           <div style='margin-top:7px;'>
               <label>Como te comunicamos?</label>
               <input type='text' id='telefono'  placeholder='+58 telefono'>
           </div>
           <div style='margin-top:7px;'>
               <label>En que pais funcinoara tu tienda?</label>
               <input type='text' id='pais'>
           </div>
        </div>
           <br>
            <button onclick='iramitienda()' class="btn btn-danger">IR A MI TIENDA</button>
            </div>
        </div>  
   




<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conoce la Mision Artemis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Volveremos a la Luna en 2024, pero esta vez llegaremos para quedarnos. 
        <br>
        Construiremos una base en la luna donde realizaremos importantes investigaciones y aprenderemos todo lo necesario para el siguiete paso. Ir a Marte 
        <br>
        <img src='img/artemis4.jpg' style='width:100%'/>
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