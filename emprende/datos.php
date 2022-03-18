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
            function step1(){
                document.getElementById("datosStep1").style.display='none';
                document.getElementById("datosStep2").style.display='block';
               
            }

                    function atrasStep1(){
                        document.getElementById("datosStep1").style.display='block';
                        document.getElementById("datosStep2").style.display='none';
                    }

            function step2(){
                document.getElementById("datosStep2").style.display='none';
                document.getElementById("datosStep3").style.display='block';
                
            }

                    function atrasStep2(){
                            document.getElementById("datosStep1").style.display='none';
                            document.getElementById("datosStep2").style.display='block';
                            document.getElementById("datosStep1").style.display='none';
                        }

            function step3(){
                document.getElementById("datosStep3").style.display='none';
                document.getElementById("datosStep4").style.display='block';
            }

                    function atrasStep3(){
                        document.getElementById("datosStep3").style.display='none';
                        document.getElementById("datosStep2").style.display='block';
                    }

                    function atrasStep4(){
                        document.getElementById("datosStep4").style.display='none';
                        document.getElementById("datosStep3").style.display='block';
                    }

            function enviarFormulario(){
                document.getElementById("validar").value='enviar';
            }
                    
                   
function mySubmitFunction(evento){
    var valor= document.getElementById("validar").value;

    if(valor==='noenviar'){
        return false;
    }else if(valor==='enviar'){
        return true;
    }
}



        </script>
    </head>
    <body>
        
    <nav class="navbar ml-auto navbar-expand-lg navbar-light bg-dark " style='background-image:url(../vida/img/starfield-banner.jpg);' >
        <div style='margin: 0 auto; color: white;'>Coloca los datos de tu tienda</div>
    </nav>
        
 

    <div id='contenidoDatos'>
        <form onsubmit="return mySubmitFunction()" action='stock.php' method='post'>

        <div  id='datosStep1'>
                <div>
                    <img src='img/email.jpg' width='150'/>
                </div>
                Ingresa tu correo electronico
                <div><input type='text' name='email'></div>
                <br>
                <button onclick="step1(this.id)" class="btn btn-primary">Siguiente</button>
            
        </div>
                


        <div  id='datosStep2' class='oculto'>
            <div>
                <img src='img/shop.jpg' width='150'/>
            </div>
             Cual es el nombre de tu negocio
            <div>
                <input type='text' name='nombreNegocio'></div>
            <br>
            <button onclick="atrasStep1()" class="btn btn-secondary" >Atras</button>
            <button onclick="step2()" id='enviar' class="btn btn-primary">Siguiente</button>
        </div>


  
         
        <div  id='datosStep3' class='oculto'>
            <div>
                <img src='img/dominio.jpg' width='160'/>
            </div>
            Cual quieres que sea tu direccion web, Ejemplo (www.avelun.com)
            <div><input type='text' name='dominio'></div>
            <br>
            <button onclick="atrasStep3()" class="btn btn-secondary">Atras</button>
            <button onclick="step3()" class="btn btn-primary">Siguiente</button>
        </div>

        <div  id='datosStep4' class='oculto'>
            <div>
                <img src='img/tulogo.jpg' width='150'/>
            </div>
            Sube el logo de tu negocio
            <div><input type='file' id='logo'></div>
            <br>
            <button onclick="atrasStep4()" class="btn btn-secondary">Atras</button>
            <button onclick="enviarFormulario()" class="btn btn-primary">Siguiente</button>
        </div>
        </form>
       
        <input type="hidden" id='validar' value='noenviar'>
        
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
        La Capsula Orion llevara a los Astronautas a la orbita lunar acomplandose con la LunarGateway. Al finalizar las misiones la Capsula Orion traera de vuelta a casa a los Astronautas. 
        <br>
        <img src='img/artemis2.jpg' style='width:100%'/>
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