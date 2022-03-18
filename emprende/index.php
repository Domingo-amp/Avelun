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
            function step2(){
                document.getElementById("step2").style.display='block';
                document.getElementById("step1").style.display='none';
            }

            function step3(){
                document.getElementById("step2").style.display='none';
                document.getElementById("step1").style.display='none';
                document.getElementById("step3").style.display='block';
            }

            function next(){
                window.location.assign("datos.php")
            }

        </script>

    </head>
    <body>

    <nav class="navbar ml-auto navbar-expand-lg navbar-light bg-dark " style='background-image:url(../vida/img/starfield-banner.jpg);' >
        <div style='margin: 0 auto; color: white;'>Bienvenida</div>
    </nav>

<div id='contenido'>

        <div id='step1'>
            <div id='indexLogoImg'>
                <img src='img/lunEmprende.jpg' width='400'>
            </div>

            <div  style='margin-top:20px; font-size:18px;'>
                <div>Si esta es tu primera experiencia creando un negocio digital no te preocupes, te guaiaremos en todo momento </div>
                <br>
                <!--<button onclick="step2()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">Continuar</button>-->
                <button onclick="step2()" class="btn btn-primary">Continuar</button>
            </div>
        </div>


        
        <div id='step2' class="oculto">
        
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel" style='width:600px; margin:0 auto; margin-top: 50px; margin-bottom: 20px;'>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../vida/img/judit.jpg" class="d-block w-100" alt="..." >
                <div class="carousel-caption d-none d-md-block">
                    <!--<h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>-->
                </div>
                </div>
                <div class="carousel-item">
                <img src="../vida/img/marianela.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>-->
                </div>
                </div>
                <div class="carousel-item">
                <img src="../vida/img/lucia.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>-->
                </div>
                </div>
                <div class="carousel-item">
                <img src="../vida/img/maider.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!--<h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>-->
                </div>
                </div>
                <div class="carousel-item">
                <img src="../vida/img/katrina.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                   <!--<h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>-->
                </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>

            <div style='margin-top:20px; font-size:18px;'>En Avelun conoceras mentoras profesionales que te ensenaran todo lo que necesitas saber para tener exito en tu negocio</div>
            <br>
            <button onclick="step3()" class="btn btn-primary">Continuar</button>
        </div>


        <div id='step3' class="oculto">
            <div id='indexLogoImg'>
                <img src='img/contactoAve.jpg' width='400'>
            </div>
            <div style='margin-top:20px; font-size:18px;'>Escribenos a nuestro email o al whatsapp si tienes alguna duda, te responderemos de inmediato </div>
            <div style='margin-top:20px; font-size:18px;'> info@avelun.com  /  +58 4241443095</div>
            <br>
            <button onclick="next()" class="btn btn-primary" >Comienza a crear tu tienda</button>
        </div>
</div><!--FIN DIV CONTENIDO-->       







<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Conoce la Mision Artemis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        La Mision Artemis de la NASA llevara a la Primera Mujer a la luna y al proximo Hombre en 2024. En Avelun Queremos contarte todo lo que esta sucediendo.
        <br>
        <img src='img/artemis1.jpg' style='width:100%'/>
            <a href='https://stem.nasa.gov/artemis/' target='_blank' style='font-size:10px;'>Picture Cortesy by NASA</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>




    </body>
</html>