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
        <meta name="robots" content="index, follow"/>
        <meta name="google" content="nositelinkssearchbox"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <link rel="icon" type="image/png" href="../site/img/lun.png">
        <link href="css/estilos.css"  rel="stylesheet" type="text/css">


        <script>

            function aggmarca(e){

                var idmarca = e.id;
                /*alert(idmarca);*/

                var url = 'upbd.php';
                var data = {marca: idmarca , correo: miVariableEnJavaScript};

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
                    document.getElementById(idmarca).disabled=true;
                });
            }
        </script>
    </head>
    <body>

    <nav class="navbar ml-auto navbar-expand-lg navbar-light bg-dark " style='background-image:url(../vida/img/starfield-banner.jpg);' >
        <div style='margin: 0 auto; color: white;'>Configura el Stock de tu tienda</div>
    </nav>

    <?php

require ('../cnx.php');


     $productos = $_POST['productos'];   
     $correo = $_POST['email'];   
     $nombreMarca= $_POST['nombreNegocio'];  
     $dominio = $_POST['dominio'];
 


     $conexion->query("INSERT INTO marcas VALUES (
      '',
      '$nombreMarca',
        '',
        '',
        '',
        '',
        '$nombreMarca',
        '/site/img/marcas/tulogo.jpg'
      )");



$conexion->query("INSERT INTO tiendas VALUES (
	'',
	  '$nombreMarca',
    '',
    '$correo',
    '',
    '',
    '',
    '',
    '',
    '$dominio',
    '',
    '$nombreMarca',
    '',
    'logo'
	)");




$conexion->query("INSERT INTO usuarios_admin_tienda VALUES (
	  '',
	  '$nombreMarca',
    '$correo',
    '',
    '',
    '',
    '',
    '',
    ''
	)");








//COPIAR Y CREAR CARPETA DE MARCA v

Ejemplo://Comprobamos si ya existe la copia
if(!is_dir($nombreMarca)){
//Asignamos la carpeta que queremos copiar
$source ='../sites/template/';
//El destino donde se guardara la copia
$destination = '../sites/' . $nombreMarca;
full_copy($source, $destination);
}

//Crear nuevos directorios completos
function full_copy( $source, $destination ) {
    if ( is_dir( $source ) ) {
        @mkdir( $destination );
        $d = dir( $source );
        while ( FALSE !== ( $entry = $d->read() ) ) {
            if ( $entry == '.' || $entry == '..' ) {
                continue;
            }
            $Entry = $source . '/' . $entry; 
            if ( is_dir( $Entry ) ) {
                full_copy( $Entry, $destination . '/' . $entry );
                continue;
            }
            copy( $Entry, $destination . '/' . $entry );
        }
 
        $d->close();
    }else {
        copy( $source, $destination );
    }
}



$tiendaProv = '$tiendaProv='."'".$nombreMarca."';";
//CREAR ARCHIVO NOMBRETIENDA
$dirFileTienda='../sites/'.$nombreMarca.'/nombretienda.php';
$nuevoarchivo = fopen($dirFileTienda, "w+");
fwrite($nuevoarchivo,"<?php $tiendaProv ?>");
fclose($nuevoarchivo);
















    if($productos === 'si'){
       

        ?>


<script type="text/javascript">
    const miVariableEnJavaScript = "<?php echo $correo ?>";
</script>



<div style='margin:20px; margin-top:50px; margin-bottom:50px;'>
    Agrega las marcas que te gustaria comercializar en tu tienda. Tendras todos los productos disponibles en AveLun. Constantemente agregaremos nuevas marcas y podras modificar tu staff de marcas desde el modulo administrador 
</div>


<div id='contenidoStock' style='margin:20px;'>

<div class="card-group">
  <div class="card">
    <img src="../site/img/marcas/4life.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='4life' />
        <button class="btn btn-secondary">Ver Productos</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='4life' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>

  <div class="card">
    <img src="../site/img/marcas/drem.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='dreams' />
        <button class="btn btn-secondary">Ver Articulos</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='dreams' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>

  <div class="card">
    <img src="../site/img/marcas/marca1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='Tu si puedes' />
        <button class="btn btn-secondary">Ver Artiulos</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='Tu si puedes' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>

  <div class="card">
    <img src="../site/img/marcas/mary.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='marykay' />
        <button class="btn btn-secondary">Ver Productos</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='marykay' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>

  <div class="card">
    <img src="../site/img/marcas/fenix.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='Fenix' />
        <button class="btn btn-secondary">Ver Articulos</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='Fenix' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>  

  <div class="card">
    <img src="../site/img/marcas/sen.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='sensaciones' />
        <button class="btn btn-secondary">Ver Libros</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='sensaciones' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>  
</div><!--Fin Card Group-->




<div class="card-group">
  <div class="card">
    <img src="../site/img/marcas/bach.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='ebach' />
        <button class="btn btn-secondary">Ver Productos</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='ebach' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>



  <div class="card">
    <img src="../site/img/marcas/libre.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='libretasdpb' />
        <button class="btn btn-secondary">Ver Articulos</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='libretasdpb' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>

  <div class="card">
    <img src="../site/img/marcas/sam.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='Samara Cosmetics' />
        <button class="btn btn-secondary">Ver Productos</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='Samara Cosmetics' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>

  <div class="card">
    <img src="../site/img/marcas/para.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <!--<h5 class="card-title">Card title</h5>-->
      <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->      <form method='post' action='../site/productos.php' target="_blank">
        <input type='hidden' name ='marca' value='Paradise' />
        <button class="btn btn-secondary">Ver Articulos</button>
      </form>
      <br>
      <button onclick='aggmarca(this)' id='Paradise' class="btn btn-primary">Agregar esta marca</button>
    </div>
  </div>  

  <div class="card" style='border-color:white;'>

  </div> 
  <div class="card" style='border-color:white;'>

 </div> 

</div><!--Fin Card Group-->









            <div>
            <form method='post' action='mensajeexito.php'>
                <br><br>
                <input type='hidden' name='email' value='<?php echo $correo ?>'>
                <input type='hidden' name='nombreMarca' value='<?php echo $nombreMarca ?>'>
                <button class="btn btn-danger">SIGUIENTE PASO</butotn>
               
            </form>
            </div>
            <br><br>


</div><!--Fin de contenidoStock--> 
        <?php







    }elseif($productos === 'no'){
       ?>
         <div style='margin:0 auto; margin-top:35px; width:600px; text-align:center;'>
             <form method='post' action='cargarnombre.php'>
             <div>
                <img src='img/felicitacion.jpg' width='400'/>
            </div>
                <div>
                    <b>Ya tienes tu tienda online. Como elegiste vender solo tus productos no 
                    tendras productos cargados inicialmente.</b> Necesitaras cargar tus productos y articulos desde el medulo administrador, es muy facil.
                    <br><br>
                    En cualquien momento podras agregar productos de otras marcas si asi lo deseas
                    <br>
<br>
                    <!--
                    <br><br>
                    Completa tus datos para finalizar la configuracion del modulo administrador de tu tienda.
    -->
                </div>
                <br>
  
                <input type='hidden' name ='email' value='<?php echo $correo?>' />
                <button class="btn btn-primary">Completar Datos</butotn>
            </form>
        </div>
       <?php
    }
?>




    </body>
</html>