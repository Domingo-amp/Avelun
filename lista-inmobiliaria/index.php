<!DOCTYPE html>
<html>
<head>
</head>

<body>

<div class="container">
      <h1 class="text-center pt-5 pb-4">Lista de Viviendas</h1>

      <div id="contenedor">
        <!-- Lista de películas -->
      </div>
</div>

<script type="text/javascript">

const request = new XMLHttpRequest();
request.open('GET', 'http://api.kinosgroup.com/api/v1/es/viviendas', true);
request.onload = function () {
  if (request.status >= 200 && request.status < 400) {
    const data = JSON.parse(this.response);
    console.log(data);
    console.log(data['data']['0']['attributes']['name']);

    var key;

    const contenedor = document.getElementById('contenedor');
    contenedor.setAttribute('class', 'card-columns');
            
    for (key in data['data']) {
      
      // Creamos una tarjeta
      const tarjeta = document.createElement('div');
      tarjeta.setAttribute('class', 'card');

      // Creamos el la cabecera y el cuerpo de la tarjeta
      const cabeceraTarjeta = document.createElement('div');
      cabeceraTarjeta.setAttribute('class', 'card-header');

      const cuerpoTarjeta = document.createElement('div');
      cuerpoTarjeta.setAttribute('class', 'card-body');

      // Creamos el encabezado y le asignamos el título de la película
      const titulo = document.createElement('h5');
      titulo.setAttribute('class', 'card-title');
      titulo.textContent = data['data'][key]['attributes']['name'];

      // Creamos la párrafo y le asignamos la descripción de la película

      const descripcion = document.createElement('p');
      descripcion.setAttribute('class', 'card-text');
      descripcion.textContent = data['data'][key]['attributes']['short_description'];

      // Agregamos la tarjeta
      contenedor.appendChild(tarjeta);

      // Agregamos la cabecera y el cuerpo a la tarjeta
      tarjeta.appendChild(cabeceraTarjeta);
      tarjeta.appendChild(cuerpoTarjeta);

      // Agregamos el título a la cabecera
      cabeceraTarjeta.appendChild(titulo);
      
      // Agregamos la descripción al cuerpo
      cuerpoTarjeta.appendChild(descripcion);
    }

                  
  } else {
    console.log("ERROR");
  }
}
request.send();




</script>

</body>
</html>