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
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="css/materialize.css">
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/materialize.js"></script>

<title>Bienvenido</title>
<style>
#titulo1{
	/*font-family: Matura MT Script Capitals;*/
	font-family: Homestead Display;
	color: #ffffff;

}
.fuente{
  font-family: Segoe UI Light;
}
body {
  /* Ubicación de la imagen */
  //background-image: url(img/moneda1.jpg);
  background-color: #ffffff;
  /* Nos aseguramos que la imagen de fondo este centrada vertical y
    horizontalmente en todo momento */
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
  //background-color: #464646;
}

@media only screen and (max-width: 1000px) {
	  #titulo1{
	  	display: none;
	  }
	  #historia{
	  	display: none;
	  }
	  #fotos{
	  	display: none;
	  }
	  #videos{
	  	display: none;
	  }

}

@media only screen and (max-width: 1300px) {
	  #titulo2{
	  	display: none;
	  }
}

nav ul a:hover {
  background-color: rgba(0, 0, 0, 0.3) !important;
}


#slider1 {
  position: relative;
  height: 330px !important;
  width: 100%;
}
#slides1{
  background-color: #9e9e9e;
  margin: 0;
  height: 300px !important;
}

.fijo {
  position:fixed !important; 
  right:10px;
   top:60px; 
   max-width:250px;
   z-index:10 !important;
 }

 .fijo2 {
  position:fixed !important; 
  right:10px;
   top:250px; 
   max-width:250px;
   z-index:10 !important;
 }

.fijo3 {
  position:fixed !important; 
  right:10px;
   top:445px; 
   max-width:250px;
   z-index:10 !important;
 }
 .fijo:hover{
    background: #ffffff; /* Cambiamos el fondo cuando el usuario pase el mouse */
    margin-right: 40px ; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
}
 .fijo2:hover{
    background: #ffffff; /* Cambiamos el fondo cuando el usuario pase el mouse */
    margin-right: 40px ; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
}
 .fijo3:hover{
    background: #ffffff; /* Cambiamos el fondo cuando el usuario pase el mouse */
    margin-right: 40px ; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
}
</style>
</head>

<body>
 <nav>
    <div class="nav-wrapper" style="background-color: #ff5f00;">
    <a href="#!" class="brand-logo">
		<img src="img/logo.png" style="max-height: 56px; width: auto;">
	</a>
	<div class="brand-logo center" id="titulo1">La Casa Nacional de la Moneda 	<span id="titulo2"> - Información Turística</span></div>
	

      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><?php echo $estado; ?></li>
        <li><?php echo $salir; ?></li>
      </ul>
      <ul class="side-nav" id="mobile-demo"  style="color: black;">
        <li><?php echo $estado; ?></li>
        <li><a href="historia.php" style="color: red;">Historia</a></li>
		<li><a href="fotos.php" style="color: green;">Fotos</a></li>
		<li><a href="videos.php" style="color: yellow;">Videos</a></li>
		<li><?php echo $salir; ?></li>
      </ul>
    </div>
  </nav>





<div class="row">
	<div class="col s12 l9">
	<div class="slider" id="slider1">
    <ul class="slides" id="slides1">
      <li>
        <img src="img/moneda1.jpg"> <!-- random image -->
        <div class="caption center-align fuente">
          <h3>Visite la Casa de la Moneda!</h3>
          
        </div>
      </li>
      <li>
        <img src="img/moneda2.jpg"> <!-- random image -->
        <div class="caption left-align fuente">
          <h3>El museo mas importante de Bolivia!</h3>
          
        </div>
      </li>
      <li>
        <img src="img/moneda3.jpg"> <!-- random image -->
        <div class="caption right-align fuente">
          <h3>El edificio más importante de la arquitectura colonial en Sud América.</h3>
    
        </div>
      </li>
      <li>
        <img src="img/moneda4.jpg"> <!-- random image -->
        <div class="caption center-align fuente">
          <h3>CASA NACIONAL DE LA MONEDA</h3>
          <h5 class="light grey-text text-lighten-3">fundada en 1572 por el virrey Francisco de Toledo.</h5>
        </div>
      </li>
    </ul>
  	</div>
	</div>

	  <!--<div class="col l2 offset-l1 fijo" id="historia"  >-->
    <div class="fijo" id="historia"  >
      <a href="historia.php" style="color: red;" onclick="hover5.playclip();">
      <div class="card z-depth-5" >
        <div class="card-image" onmouseover="hover3.playclip()">
          <img src="img/historia1_1.gif">
        </div>
        <div class="card-action" >
          VER HISTORIA
        </div>
      </div>
      </a>
    </div>
  </div>

<div class="row">

  <div class="col s12 m12 l9" >
    <div class="card darken-1 z-depth-4" style="background-color: #ff4f00;">
      <div class="card-content white-text">
        <span class="card-title white-text">Ideologia de La Casa Nacional de la Moneda</span>
        <p>La Casa de la Moneda es la atracción estrella de Potosí y uno de los mejores museos de América del Sur. La primera casa de moneda de Potosí fue construida en el actual sitio de la Casa de Justicia en 1572 bajo las órdenes del Virrey de Toledo. Es un vasto y sorprendente bello edificio que ocupa toda una manzana. Usted no tiene que ser un numismático para encontrar la historia de la primera moneda global. La ideologia de la Casa Nacional de la Moneda es: Cultivar el espiritu humano rescatando los valores, creencias y costumbres de la población.</p>
      </div>
    </div>
  </div>


    <!--<div class="col s2 l2 offset-l2 offset-s2" id="historia" onmouseover="hover3.playclip()" >
      <a href="historia.php" style="color: red;" >
      <div class="card">
        <div class="card-image" >
          <img src="img/historia1_1.gif">
        </div>
        <div class="card-action" >
          VER HISTORIA
        </div>
      </div>
      </a>
    </div>-->

    <!--<div class="col s2 l2 offset-l1" id="videos" >-->
  <div class="fijo2" id="videos" >
    <a href="videos.php" style="color: red;">
    <div class="card z-depth-5" >
        <div class="card-image" onmouseover="hover3.playclip()">
          <img src="img/VIDEOS.png">
        </div>
        <div class="card-action">
          VER VIDEOS
        </div>
      </div>
      </a>
  </div>
    
  </div>

<div class="row">
	
  <div class="col s12 m12 l4 ">
    <div class="card darken-1 z-depth-4" style="background-color: #000000;">
      <div class="card-content white-text">
        <span class="card-title white-text">Misión de La Casa Nacional de la Moneda</span>
        <p>Somos una entidad cultural del estado que tiene por finalidad rescatar, proteger, custodiar, conservar, restaurar, promover y poner en valor el patrimonio cultural tangible e intangible que se halla en el repositorio, rescatando la historia y cultura de la villa imperial.</p>
      </div>
    </div>
  </div>

  <div class="col s12 m12 l5">
    <div class="card darken-1 z-depth-4" style="background-color: #ffff00;">
      <div class="card-content black-text">
        <span class="card-title black-text">Visión de La Casa Nacional de la Moneda</span>
        <p>Consolidar la estructura integral de la entidad fortaleciendo la vocacion que la conforma, desarrollando estrategias democraticas, participativas, y descolonizadoras para el cumplimiento de su misión de promover y garantizar la interculturalidad orientada al vivir bien.</p>
      </div>
    </div>
  </div>

    <!--<div class="col s2 l2 offset-l2 offset-s2" id="fotos" onmouseover="hover3.playclip()" >
      <a href="fotos.php" style="color: red;">
      <div class="card">
        <div class="card-image">
          <img src="img/FOTOS1.jpg">
        </div>
        <div class="card-action">
          VER FOTOS
        </div>
      </div>
      </a>
    </div>-->
	<!--<div class="col l2 offset-l1" id="fotos"  >-->
  <div class="fijo3" id="fotos"  >
      <a href="fotos.php" style="color: red;">
      <div class="card z-depth-5">
        <div class="card-image" onmouseover="hover3.playclip()">
          <img src="img/FOTOS1.jpg" >
        </div>
        <div class="card-action">
          VER FOTOS
        </div>
      </div>
      </a>
    </div>


</div>

<!--<div class="row">
	<div class="col s2 l2 offset-s10 offset-l10" id="videos" onmouseover="hover3.playclip()" >
		<a href="videos.php" style="color: red;">
		<div class="card">
        <div class="card-image">
          <img src="img/VIDEOS.png">
        </div>
        <div class="card-action">
          VER VIDEOS
        </div>
      </div>
      </a>
	</div>


</div>-->





<script>
	$( document ).ready(function(){
		 $(".button-collapse").sideNav();
		 document.getElementById('player').play();
		 document.getElementById('player').volume = 0.1;
    $('.slider').slider({full_width: true});


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

var cancion= createsoundbite('audio/Zapateo Potosino - Danza folklorica de Bolivia.mp3');


function pause(){
   document.getElementById('player').pause();
   document.getElementById('enlace').innerHTML="<a class='btn-floating btn-large red' onclick='play();'><i class='large material-icons'>play_arrow</i></a>";
}
function play(){
   document.getElementById('player').play();
   document.getElementById('enlace').innerHTML="<a class='btn-floating btn-large red' onclick='pause();'><i class='large material-icons'>pause</i></a>";
}
</script>

  <audio id="player" src="audio/Savia Andina - Sangre Andina (HD) CAPORALES.mp3" hidden="true"></audio>   
  
  <div class="fixed-action-btn" style="bottom: 5px; left: 5px;" id="enlace">
    <a class="btn-floating btn-large red"  onclick="pause();">
      <i class="large material-icons">pause</i>
    </a>
  </div>


        
</body>

</html>