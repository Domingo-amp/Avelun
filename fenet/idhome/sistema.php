<!DOCTYPE html>
<html>
<head>
	<title>ID HOME</title>
	<link href="css/style.css"  rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	
	<link rel="icon" type="image/png" href="img/favicon.png">

	
</head>
<body>





<nav>
	<a href='sistema.php'><div class='logo'><img src='img/idaligator.png'> </div></a>
	<a href='#ordernow'><div class='order'>ORDER NOW</div></a>
</nav>



<a href='https://api.whatsapp.com/send?phone=17863385190' target='_blank'>
<div class="vida">
	 CONTACT US <img src="img/contact_us_icon_white.png" width="25px" class="icon-nav">
</div>
</a>








<!--BANNER 1-->
<div class='banner1'> 
	<div class='texto-banner1'>
		<p style='text-align:justify;'>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
		</p>		
		<a href='#ordernow'><div class='buton-banner1'> ORDER NOW</div></a>
		<div class='buton-banner2'> RENT</div> 
	</div>
</div>

<!--BANNER 2-->
<div class='banner2'> 
	<div class='cajaDiscover' >
			<div class='imgRestrom' onmouseover='mostrarImagen(1)'></div>
			<div class='imgCleaning' onmouseover='mostrarImagen(2)'></div>
			<div class='imgCooking' onmouseover='mostrarImagen(3)'></div>
			<div class='imgproductivity' onmouseover='mostrarImagen(4)'></div>
	</div>

	<div class='overmouseImgContenedor' style='display:none;' id='overmouseImgContenedor' onclick='cerrar()'>
		<div class='overmouseImgImagen' id='overmouseImgImagen' onmouseout='cerrar()'>
			<div style='float:right; width:30px; background-color:white;' onclick='cerrar()'>(X)</div>
		</div>
	</div>

	<div class='texto-banner2'>
		<H3>DISCOVER ALLIGATOR</H3>
	</div>
</div>

<!--BANNER 3-->
<div class='banner3'> 
	<div class='texto-banner3'>
		<p style='text-align:justify;'>
		<H3>STRUCTURE</H3>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
		</p>		
	</div>
</div>

<!--BANNER 4-->
<div class='banner4'> 
	<div class='texto-banner4'>
		<p style='text-align:justify;'>
		<H3>MATERIALS</H3>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
		</p>		
	</div>
</div>





















<!--CARROUSEL-->

<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000">
	  <img src="img/carrousel/slide1.jpg" class="d-block w-100" alt="...">
	  	<!--texto-->
		<div class='texto-banner4'>
			<p style='text-align:justify;'>
			<H3>MODULAR</H3>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
			</p>		
		</div>
		<!--fin texto-->
    </div>
    <div class="carousel-item" data-interval="10000">
	  <img src="img/carrousel/slide2.jpg" class="d-block w-100" alt="...">
	  	<!--texto-->
		<div class='texto-banner4'>
			<p style='text-align:justify;'>
			<H3>BIOCLIMATIC</H3>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
			</p>		
		</div>
		<!--fin texto-->
    </div>
    <div class="carousel-item" data-interval="10000">
	  <img src="img/carrousel/slide3.jpg" class="d-block w-100" alt="...">
	  	<!--texto-->
		<div class='texto-banner4'>
			<p style='text-align:justify;'>
			<H3>TECHNOLOGIC</H3>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
			</p>		
		</div>
		<!--fin texto-->
	</div>
	<div class="carousel-item" data-interval="10000">
	  <img src="img/carrousel/slide4.jpg" class="d-block w-100" alt="...">
	  	<!--texto-->
		<div class='texto-banner4'>
			<p style='text-align:justify;'>
			<H3>ADAPTABLE</H3>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
			</p>		
		</div>
		<!--fin texto-->
	</div>
	<div class="carousel-item" data-interval="10000">
	  <img src="img/carrousel/slide5.jpg" class="d-block w-100" alt="...">
	  	<!--texto-->
		<div class='texto-banner4'>
			<p style='text-align:justify;'>
			<H3>RENEWABLE ENERGY</H3>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
			</p>		
		</div>
		<!--fin texto-->
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>







<!--WEATER-->
<div class='weater'> 
<iframe  src="https://www.youtube.com/embed/5GrPwHrc3HI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>




<a name="validar" id="a"></a>

<br><br><br>
























<!--INICIO DE SISTENA-->
<div class='submenu'>
	<div class='submenuitems' onclick='location_btn()' id='location' style='background-color:#a3c039; color:black;'>CUSTOMIZE</div>
	<div class='submenuitems' onclick='customize_btn()' id='customize'>LOCATION</div>
	<div class='submenuitems' onclick='architectural_btn()' id='architectural' >FINISHES</div>
</div>






<!-- PRIMERA SECCION -->
<div style='text-align:center;' id='caja-location' style='display:inline-block;'>




	<div class='imgIdHomeSection' id='imgIdHomeSection'>
	</div>







	<div class='idhomesections' id='idhomesections'>

				<!-- CLEANING  SUMAR Y RESTAR--->
				<div class='botoneramasmenos' id='valorCleaningbox' style='display:block;'> 
					<div style='margin-bottom:50px;'>
						<div></div>
						<div onclick='sumarCleaning()'><img src='img/mas.png'></div>
					</div>
					<div>
						<div onclick='restarCleaning()'><img src='img/menos.png'></div>
						<div></div>			
					</div>
				</div>

				<!-- COOCKING  SUMAR Y RESTAR--->
				<div class='botoneramasmenos' id='valorCookingbox' style='display:none;'> 
					<div style='margin-bottom:50px;'>
						<div></div>
						<div onclick='sumarCooking()'><img src='img/mas.png'></div>
					</div>
					<div>
						<div onclick='restarCooking()'><img src='img/menos.png'></div>
						<div></div>			
					</div>
				</div>

				<!-- RESTING  SUMAR Y RESTAR--->
				<div class='botoneramasmenos' id='valorRestingbox' style='display:none;'> 
					<div style='margin-bottom:50px;'>
						<div></div>
						<div onclick='sumarResting()'><img src='img/mas.png'></div>
					</div>
					<div>
						<div onclick='restarResting()'><img src='img/menos.png'></div>
						<div></div>			
					</div>
				</div>

				<!-- PRODUCTIVITY  SUMAR Y RESTAR--->
				<div class='botoneramasmenos' id='valorProductivitybox' style='display:none;'> 
					<div style='margin-bottom:50px;'>
						<div></div>
						<div onclick='sumarProductivity()'><img src='img/mas.png'></div>
					</div>
					<div>
						<div onclick='restarProductivity()'><img src='img/menos.png'></div>
						<div></div>			
					</div>
				</div>
				



	<div class='caja-botones-cotimize'>
	 <div class='caja-btns'>
		 <div class='img-btn' id='cleaning-img'>.</div>
		 <div class='select-btn' id='cleaning' onclick='cleaning()'>
		 	<div class='barra' id='barraCleaning' style='background-color:#00bad2;'></div>
			<div class='barraTitulo' style='margin-left:45px;'><b>CLEANING</b></div>
		</div>
		 <div class='porcentajes'><spam id='valorCleaning'></spam>  <spam>%</spam></div>
	 </div>

	 <div class='caja-btns'>
		 <div class='img-btn2' id='cooking-img'>.</div>
		 <div class='select-btn' id='cooking' onclick='cooking()'>
		 	<div class='barra' id='barraCooking' style='background-color:#cccccc;'></div>
			<div class='barraTitulo' style='margin-left:47px;'><b>COOKING</b></div>
		</div>
		 <div class='porcentajes'><spam id='valorCooking'></spam>  <spam>%</spam></div>
	 </div>

	 <div class='caja-btns'>		 
		 <div class='img-btn3' id='resting-img'>.</div>
		 <div class='select-btn' id='resting' onclick='resting()'>
		 	<div class='barra' id='barraResting' style='background-color:#cccccc;'></div>
			<div class='barraTitulo' style='margin-left:50px;'><b>RESTING</b></div>
		 </div>
		 <div class='porcentajes'><spam id='valorResting'></spam>  <spam>%</spam></div>
	 </div>

	 <div class='caja-btns'>		 
		 <div class='img-btn4' id='productivity-img'>.</div>
		 <div class='select-btn' id='productivity' onclick='productivity()'>
		 	<div class='barra' id='barraProductivity' style='background-color:#cccccc;'></div>
			<div class='barraTitulo' style='margin-left:35px;'><b>PRODUCTIVITY</b></div>
		</div>
		 <div class='porcentajes'><spam id='valorProductivity'></spam>  <spam>%</spam></div>
	 </div>
	 </div><!-- FIN DE caja-botones-custumize-->
	 <div class='caja-botones-imagenes' id='caja-botones-imagenes'>
		
	 </div>
	</div><!--FIN DE CONTENEDOR CON IMAGENES DE FONDO ID HOME SECTION-->

	
	<div id='cajaPrecio' class='cajaPrecio'>
		<spam id='precio'></spam><spam>$</spam>
	</div>


	<div id='separador' class='separador'></div>
	
	


	<div class='texto' id='textoCleaning' style='display:block;'>
		<h3>CLEANING</h3>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis 
		CLEANING
	</div>

	<div class='texto' id='textoCooking' style='display:none;'>
		<h3>COOKING</h3>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis 
		CLEANING
	</div>

	<div class='texto' id='textoResting' style='display:none;'>
		<h3>RESTING</h3>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis 
		CLEANING
	</div>

	<div class='texto' id='textoProductivity' style='display:none;'>
		<h3>PRODUCTIVITY</h3>
		Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis 
		CLEANING
	</div>
</div><!--FIN PRIMERA SECCION-->




























<!-- SEGUNDA SECCION-->
<div style='text-align:center; display:none;' id='idhomesectionstwo'>

		<div class='idhomesectionstwo' id='idhomesectionstwoImg'>
			<div class='caja-btns'>
				<div class='select-btn2' id='backyard' onclick='backyard()' style='#a3c039'>BACKYARD</div>
			</div>

			<div class='caja-btns'>
				<div class='select-btn2' id='poolhouse' onclick='poolhouse()'>POOLHOUSE</div>
			</div>

			<div class='caja-btns'>
				<div class='select-btn2' id='farmhouse' onclick='farmhouse()'>FARMHOUSE</div>
			</div>
		</div>


	<div id='cajaPrecio' class='cajaPrecio'>
		<spam id='precio2'></spam><spam>$</spam>
	</div>


		<div class='texto' id='textoBackyard' style='display:block;'>
				<h3>BACKYARD ALLIGATOR</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis 
				CLEANING
		</div>
		<div class='texto' id='textoPool' style='display:none;'>
				<h3>ALLIGATOR FOR POOL</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis 
				CLEANING
		</div>
		<div class='texto' id='textoFarm' style='display:none;'>
				<h3>FARM ALLIGATOR</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis 
				CLEANING
		</div>

	 
 </div><!--FIN DE CONTENEDOR CON IMAGENES DE FONDO-->









































<!--  TERCERA SECCION-->
 <div style='text-align:center; display:none;' id='caja-architectural'>

 


 <div class='idhomesectionstres' id='idhomesectionstres' >
	 <div class='caja-btns'>
		 <div class='select-btn2' id='skin' onclick='skin()' style='background-color:#a3c039; color:black;'>SKIN</div>
	 </div>

	 <div class='caja-btns'>
		 <div class='select-btn2' id='relax' onclick='relax()'>RELAX</div>
	 </div>

	 <div class='caja-btns'>
		 <div class='select-btn2' id='conectivity' onclick='conectivity()'>CONECTIVITY</div>
	 </div>

	 <div class='caja-btns'>
		 <div class='select-btn2' id='pluggins' onclick='pluggins()'>PLUGGINS</div>
	 </div> 
 </div><!--FIN DE CONTENEDOR CON IMAGENES DE FONDO-->



 	<div id='cajaPrecio' class='cajaPrecio'>
		<spam id='precio3'></spam><spam>$</spam>
	</div>



<!--SKIN -->
 <div class='botones-recubrimiento' id='texto-skin' style='display:block;'>
    <div>
        <div class='options-recubrimiento' id='aligator' onclick='aligator()'>Aligator</div>
        <div class='options-recubrimiento' id='steel' onclick='steel()'>Steel</div>
        <div class='options-recubrimiento' id='wood' onclick='wood()'>Wood</div>
        <div class='options-recubrimiento' id='cement' onclick='cement()'>Cement</div>	 
    </div>
</div>
<!--RELAX -->
<div class='botones-recubrimiento' id='texto-relax'style='display:none;'>
    <div>
        <div class='options-recubrimiento' id='sauna' onclick='sauna()'>Sauna</div>
        <div class='options-recubrimiento' id='turco' onclick='turco()'>Turco</div>
        <div class='options-recubrimiento' id='jacuzzi' onclick='jacuzzi()'>Jcuzzi</div>
        <div class='options-recubrimiento' id='pool' onclick='pool()'>Pool</div>	 
    </div>
 </div>
<!--CONECTIVITY -->
 <div class='botones-recubrimiento' id='texto-conectivity' style='display:none;'>
    <div>
        <div class='options-recubrimiento' id='alexa' onclick='alexa()'>Alexa</div>
        <div class='options-recubrimiento' id='siri' onclick='siri()'>Siri</div>
        <div class='options-recubrimiento' id='google' onclick='google()'>Google</div>
    </div>
 </div>
<!--PLUGGINS -->
 <div class='botones-recubrimiento' id='texto-pluggins' style='display:none;'>
    <div>
        <div class='options-recubrimiento' id='tree' onclick='tree()'>ID Tree</div>
    </div>
 </div>

<!-- Cambios de imagenes y de textos -->
<div id='aligatorSkin' style='display:block;'>
	<div class='recubrimiento' id=''></div>

	<div class='texto-recubrimiento' id=''>
		<h3>ALLIGATOR SKIN</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>


<div id='steelSkin' style='display:none;'>
	<div class='recubrimiento' id=''></div>

	<div class='texto-recubrimiento' id=''>
	<h3>STEEL SKIN</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>


<div id='woodSkin' style='display:none;'>
	<div class='recubrimiento' id=''></div>

	<div class='texto-recubrimiento' id=''>
	<h3>WOOD SKIN</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>


<div id='concreteSkin' style='display:none;'>
	<div class='recubrimiento' id=''></div>

	<div class='texto-recubrimiento' id=''>
	<h3>CONCRETE SKIN</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>


<div id='saunaRelax' style='display:none;'>
	<div class='recubrimiento' id=''></div>

	<div class='texto-recubrimiento' id=''>
	<h3>SAUNA ON BATROOM</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>


<div id='turkishRelax' style='display:none;'>
	<div class='recubrimiento' id=''></div>

	<div class='texto-recubrimiento' id=''>
	<h3>TURKISH BATH</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>


<div id='jacuzziRelax' style='display:none;'>
	<div class='recubrimiento' id=''></div>

	<div class='texto-recubrimiento' id=''>
	<h3>JACUZZI</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>

<div id='poolRelax' style='display:none;'>
	<div class='recubrimiento' id=''></div>

	<div class='texto-recubrimiento' id=''>
	<h3>POOL</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>

<div id='alexaConectivity' style='display:none;'>
	<div class='recubrimiento' id=''><img src='img/0729_alexa_thumbnail.jpg' style='width:200px; height:200px;'></div>

	<div class='texto-recubrimiento' id=''>
	<h3>AMAZON ALEXA</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>

<div id='siriConectivity' style='display:none;'>
	<div class='recubrimiento' id=''><img src='img/07210_siri_thumbnail.jpg' style='width:200px; height:200px;'></div>

	<div class='texto-recubrimiento' id=''>
	<h3>APPLE SIRI</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>

<div id='googleConectivity' style='display:none;'>
	<div class='recubrimiento' id=''><img src='img/07211_home_thumbnail.jpg' style='width:200px; height:200px;'></div>

	<div class='texto-recubrimiento' id=''>
	<h3>GOOGLE HOME</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>


<div id='treePluggins' style='display:none;'>
	<div class='recubrimiento' id=''><img src='img/07212_Idtree_thumbnail.jpg' style='width:200px; height:200px;'></div>

	<div class='texto-recubrimiento' id=''>
	<h3>ID-TREE SOLAR ENERGY SOURCE</h3>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt 
				ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci 
				tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum 
				
	</div>
</div>
 </div><!--FIN DE TERCERA SECCION-->














 <input type='hidden' value='0' id ='sumaPorcentaje'>



 <input type='hidden' value='0' id ='precioCustomize'>
 <input type='hidden' value='0' id ='preciolocation'>
 <input type='hidden' value='0' id ='precioskin'>
 <input type='hidden' value='0' id ='preciobano'>
 <input type='hidden' value='0' id ='precioJacuzzi'>
 <input type='hidden' value='0' id ='precioPool'>
 <input type='hidden' value='0' id ='conectivityPrecios'>

 <input type='hidden' value='0' id ='treePrecios'>





 <br><br><br>
<div class='presupuesto'> 


	<h4>Resumen</h4>
	<a name="ordernow" id="a"></a>

	<label>Seccion</label><br>
	<input type='text' value='Cleaning'  readonly style='width:100px;'/> <input type='text' value=''  id='sendCleaning' readonly style='width:50px;' name='cleaning'/>%<br>
	<input type='text' value='Cooking'  readonly style='width:100px;'/>  <input type='text' value=''  id='sendCooking' readonly style='width:50px;' name='cooking'/>%<br>
	<input type='text' value='Resting'  readonly style='width:100px;'/>  <input type='text' value=''  id='sendResting' readonly style='width:50px;' name='resting'/>%<br>
	<input type='text' value='Productivity'  readonly style='width:100px;'/>  <input type='text' value=''  id='sendProductivity' readonly style='width:50px;' name='productivity'/>%<br>
	<label>Exterior</label><br>
	<input type='text' value='' id='exterioreSend' readonly name='exterior'/><br>
	<label>Skin</label><br>
	<input type='text' value='' id='skinSend' readonly name='skin'/><br>
	<label>Relax</label><br>
		<label>Bano</label><input type='text' value='' id='relaxSend' readonly name='relax'/><br>
		<label>Pool</label><input type='text' value='No' id='poolsend' readonly name='pool'/><br>
		<label>Jacuzzi</label><input type='text' value='No' id='jacuzzisend' readonly name='jacuzzi'/><br>
	<label>Conectivity</label><br>
	<input type='text' value='' id='conectivitySend' readonly name='conectivity'/><br>
	<label>Pluggins</label><br>
	<input type='text' value='No' id='plugginSend' readonly name='pluggins'/><br><br>
	<label>Precio Total</label><br>
	<input type='text' value='' id='preciosend' readonly name='preciototalsend'/><br><br>
	
	<button onclick='procesarpagos()'>CHECKOUT</button>

</div>




<div class='validarCampos' style='display:none;' id='validarCampos'>
	<div class='cajaValidarCampos'>
		<p id='textoValidar'><p>
		<a href='#validar'><button onclick='aceptarCompletar()'>Completar Personalizacion</button></a>
	</div>
</div>





<div class='precesarPagos' style='display:none;' id='precesarPagos'>
		<div class='cajaProcesarPagos'>
			<div style='float:right; width:30px; background-color:white;' onclick='cerrarprocesarpagos()'>(X)</div>
				<div style='text-align:center;'>

					<h3>Ingrese su datos para continuar</h3>
					<br>
					<form action='checkout.php' method='post' >
						<div style='text-align:center;'>
							<label>Nombre:</label><br>
							<input type='text'  name='nombre' required/>
						</div>
						<div style='text-align:center;'>
							<label>Correo Electronico:</label><br>
							<input type='email'  name='email' required/>
						</div>
						<div style='text-align:center;'>
							<label>Telefono:</label><br>
							<input type='text'  name='telefono' required/>
						</div>
						<br>

					
						<input type='hidden' name='cleaning' value='' id='formulrioCleaning' />
						<input type='hidden' name='cooking' value='' id='formulrioCooking'/>
						<input type='hidden' name='resting' value='' id='formulrioResting'/>
						<input type='hidden' name='productivity' value='' id='formulrioProductivity'/>
						<input type='hidden' name='exterior' value='' id='formulrioExterior'/>
						<input type='hidden' name='skin' value='' id='formulrioSkin'/>
						<input type='hidden' name='bano' value='' id='formulrioBano'/>
						<input type='hidden' name='pool' value='' id='formulrioPool'/>
						<input type='hidden' name='jacuzzy' value='' id='formulrioJacuzzi'/>
						<input type='hidden' name='conectivity' value='' id='formulrioConectivity'/>
						<input type='hidden' name='pluggins' value='' id='formulrioTree'/>
						<input type='hidden' name='preciototal' value='' id='formulrioPrecio'/>
						<br>
						<input type='submit' name='enviar' value='Aceptar'/>
					</form>
				</div>
		</div>
	</div>









<div class='formulario'>
	<div class='contenedorInput'>
		<div class='inputForm'>CLEANING<br>25%</div>
	</div>
	<div class='contenedorInput'>
		<div class='inputForm'>EXTERIOR<br>Backyard</div>
	</div>
	<div class='contenedorInput'>
		<div class='inputForm'>COOKING<br>25%</div>
	</div>
	<div class='contenedorInput'>
		<div class='inputForm'>SKIN<br>Steel</div>
	</div>
	<div class='contenedorInput'>
		<div class='inputForm'>RESTING<br>25%</div>
	</div>
	<div class='contenedorInput'>
		<div class='inputForm'>CONECTIVITY<br>Google</div>
	</div>
	<div class='contenedorInput'>
		<div class='inputForm'>PRODUCTIVITY<br>25%</div>
	</div>
	<div class='contenedorInput'>
		<div class='inputForm'>RELAX<br>Sauna, Pool</div>
	</div>

	<div class='placeOrder'>PLACE ORDER</div>
</div>


















 




























<footer style='text-align:center; height:50px; padding-top:20px;'>
ID Home / Provacity & Legacy  / Contac / Carrers
</footer>
<script src="js/script.js"></script>
</body>
</html>