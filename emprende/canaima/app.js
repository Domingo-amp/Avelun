

var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');


formulario.addEventListener('submit', function(e){
	e.preventDefault();
	console.log('PUTITO')

	var datos = new FormData(formulario);


	fetch('envio.php',{
		method: 'POST',
		body: datos
	})

	.then( res => res.json())
	.then( data => {

		if (data === 'error'){
			respuesta.innerHTML = `

				<div class="alert alert-danger" role="alert">
					No hay articulos en esta marca
				</div>

			`

			
		}else{
			respuesta.innerHTML = `

				<div class="alert alert-primary" role="alert">
					${data}
				</div>

			`
		}
	})
})





