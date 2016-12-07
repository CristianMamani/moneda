<?php
//Reanudamos la sesión
session_start();

//Comprobamos si el usario está logueado
//Si no lo está, se le redirecciona al index
//Si lo está, definimos el botón de cerrar sesión y la duración de la sesión
if(!isset($_SESSION['usuario']) and $_SESSION['estado'] != 'Autenticado') {
	header('Location: index.php');
} else {
	$estado = $_SESSION['usuario'];
	$salir = '<a href="recursos/salir.php" target="_self">Cerrar sesión</a>';
	require('recursos/sesiones.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="css/materialize.css">
	<script src="js/jquery-3.0.0.min.js"></script>
	<script src="js/materialize.js"></script>

	<title>FOTOS- SITCS</title>
	<style>
		.fuente{
			font-family: Homestead Display;
			
		}
		#titulo1{
			font-size: 50px;
		}
body {
  /* Ubicación de la imagen */
  /*background-image: url(img/moneda1.jpg);*/
  /* Nos aseguramos que la imagen de fondo este centrada vertical y
    horizontalmente en todo momento */
  //background-color: black;
  background-position: center center;
  /* La imagen de fondo no se repite */
  background-repeat: no-repeat;
  /* La imagen de fondo está fija en el viewport, de modo que no se mueva cuando
     la altura del contenido supere la altura de la imagen. */
  background-attachment: fixed;
  /* La imagen de fondo se reescala cuando se cambia el ancho de ventana
     del navegador */
  background-size: cover;
  /* Fijamos un color de fondo para que se muestre mientras se está
    cargando la imagen de fondo o si hay problemas para cargarla  */
  /*background-color: #464646;*/
}

@media only screen and (max-width: 767px) {

}

nav ul a:hover {
  background-color: rgba(0, 0, 0, 0.3) !important;
}

	</style>
</head>
<body>

<nav>
    <div class="nav-wrapper" style="background-color: #ff5f00;">
      <a href="#" class="brand-logo fuente center" ><span id="titulo1">Fotos</span></a>
      
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="" onclick="history.back()"><i class="material-icons left">arrow_back</i>Volver</a></li>
      </ul>
    </div>
  </nav>


<br>
<div class="row">
	<div class="col s12">
	<div class="slider">
    <ul class="slides">
      <li>
        <img src="img/moneda1.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>Visite la Casa de la Moneda!</h3>
          
        </div>
      </li>
      <li>
        <img src="img/moneda2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>El museo mas importante de Bolivia!</h3>
          
        </div>
      </li>
      <li>
        <img src="img/moneda3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>El edificio más importante de la arquitectura colonial en Sud América.</h3>
    
        </div>
      </li>
      <li>
        <img src="img/moneda4.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>CASA NACIONAL DE LA MONEDA</h3>
          <h5 class="light grey-text text-lighten-3">fundada en 1572 por el virrey Francisco de Toledo.</h5>
        </div>
      </li>
    </ul>
  </div>
      
	  </div>
  </div>
<div class="center">
<div class="row">
	<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed"  data-caption="Cerro Rico de Potosí" width="250" src="img/fotos/maxresdefault.jpg">
	</div>
	<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Extracción de Plata de las minas de Potosí" width="250" src="img/fotos/Potosi-Bolivia.jpg">
	</div>
	<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Laguna Colorada." width="250" src="img/fotos/p-siloli.jpg">
	</div>
</div>
<div class="row">
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Interior de la Casa Nacional de la Moneda (noche)." width="250" src="img/fotos/d08446a392744d33967ff7ac405614c5.jpg">
		</div>
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Iglesia." width="250" height="200" src="img/fotos/cdlm26.jpg">
	</div>
	<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Pasaje Principal." width="250" height="200" src="img/fotos/cdlm22.jpg">
	</div>
	

</div>

<div class="row">
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Patio" width="250" src="img/fotos/cdlm6.jpg">
	</div>
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Interior de la Casa Nacional de la Moneda (día)." width="250" height="200" src="img/fotos/casadelamoneda1.jpg">
	</div>
	<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Puerta Principal de la Casa Nacional de la Moneda." width="250" height="200" src="img/fotos/bolivia_facts_history_historia_potosi.jpg">
	</div>
	
</div>

<div class="row">
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Atardecer en Potosí." width="250" src="img/fotos/19374_gd.jpg">
	</div>
		<div class="col s6 m4" align="center"onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Cerro Rico." width="250" height="200" src="img/fotos/02.jpg">
	</div>
	<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="La noche de museos y sus personajes tiene como objetivo transmitir a toda la población potosina y nacional, la cultura e historia que se tiene como riqueza invaluable." width="250" height="200" src="img/fotos/6.jpg">
	</div>
	
</div>

<div class="row">
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Maquinaria Antigua." width="250" src="img/fotos/gallery_big2.jpg">
	</div>
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Máquinas Laminadoras de 1750" width="250" height="200" src="img/fotos/img11.jpg">
	</div>
	<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Balanzas y Equipos de Acuñación." width="250" height="200" src="img/fotos/scroll2.jpg">
	</div>
	
</div>	

<div class="row">
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Crucifijo de Plata." width="250" src="img/fotos/scroll5.jpg">
	</div>
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
			<img class="materialboxed" data-caption="Platería" width="250" height="200" src="img/fotos/img11.png">
		</div>

		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
			<img class="materialboxed" data-caption="Platería" width="250" height="200" src="img/fotos/propias/20151117_111928.jpg">
		</div>
	
</div>	

<div class="row">
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="visita" width="250" src="img/fotos/propias/20151117_111948.jpg">
	</div>
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
			<img class="materialboxed" data-caption="pasillo" width="250" height="200" src="img/fotos/propias/20151119_154549.jpg">
		</div>

		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
			<img class="materialboxed" data-caption="visita" width="250" height="200" src="img/fotos/propias/20151119_162652.jpg">
		</div>
	
</div>	

<div class="row">
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
		<img class="materialboxed" data-caption="Artesanía, Barco de madera." width="250" src="img/fotos/propias/20151119_162743.jpg">
	</div>
		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
			<img class="materialboxed" data-caption="Ulises, Catacumbas.." width="250" height="200" src="img/fotos/propias/20151119_162912.jpg">
		</div>

		<div class="col s6 m4" align="center" onclick="hover15.playclip()">
			<img class="materialboxed" data-caption="Ulises, jugando..." width="250" height="200" src="img/fotos/propias/20151119_171142.jpg">
		</div>
	
</div>	

</div>
</div>
<audio id="player" src="audio/savia andina -- verbenita.mp3" hidden="true"></audio>   
<script>
	 $(document).ready(function(){

  
      $('.materialboxed').materialbox();

      $('.slider').slider({full_width: true});
     document.getElementById('player').play();
     document.getElementById('player').volume = 0.3;

    });

//<![CDATA[
// Definir lista de extensiones y el tipo de fichero de audio asociado. Puedes añadir más
var html5_audiotypes={ 
"mp3": "audio/mpeg",
"mp4": "audio/mp4",
"ogg": "audio/ogg",
"wav": "audio/wav"
}

function createsoundbite(sound){
var html5audio=document.createElement('audio')
if (html5audio.canPlayType){ //Comprobar soporte para audio HTML5
for (var i=0; i<arguments.length; i++){
var sourceel=document.createElement('source')
sourceel.setAttribute('src', arguments[i])
if (arguments[i].match(/.(w+)$/i))
sourceel.setAttribute('type', html5_audiotypes[RegExp.$1])
html5audio.appendChild(sourceel)
}
html5audio.load()
html5audio.playclip=function(){
html5audio.pause()
html5audio.currentTime=0
html5audio.play()

}
return html5audio
}
else{
return {playclip:function(){throw new Error('Su navegador no soporta audio HTML5')}}
}
}

//Inicializar sonidos
var hover1 = createsoundbite('audio/botones/1.wav');
var hover2 = createsoundbite('audio/botones/2.wav');
var hover3 = createsoundbite('audio/botones/3.wav');
var hover4 = createsoundbite('audio/botones/4.wav');
var hover5 = createsoundbite('audio/botones/5.wav');
var hover6 = createsoundbite('audio/botones/6.wav');
var hover7 = createsoundbite('audio/botones/7.wav');
var hover8 = createsoundbite('audio/botones/8.wav');
var hover9 = createsoundbite('audio/botones/9.wav');
var hover10 = createsoundbite('audio/botones/10.wav');
var hover11 = createsoundbite('audio/botones/11.wav');
var hover12 = createsoundbite('audio/botones/12.wav');

var hover14 = createsoundbite('audio/botones/boton.wav');
var hover15 = createsoundbite('audio/botones/fotos.wav');

function pause(){
   document.getElementById('player').pause();
   document.getElementById('enlace').innerHTML="<a class='btn-floating btn-large red' onclick='play();'><i class='large material-icons'>play_arrow</i></a>";
}
function play(){
   document.getElementById('player').play();
   document.getElementById('enlace').innerHTML="<a class='btn-floating btn-large red' onclick='pause();'><i class='large material-icons'>pause</i></a>";
}

</script>

 <div class="fixed-action-btn" style="bottom: 5px; left: 5px;" id="enlace">
    <a class="btn-floating btn-large red"  onclick="pause();">
      <i class="large material-icons">pause</i>
    </a>
 </div>

</body>
</html>