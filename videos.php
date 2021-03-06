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

	<title>Videos - SITCS</title>
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
      <a href="#" class="brand-logo fuente center" ><span id="titulo1">VIDEOS</span></a>
      
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="" onclick="history.back()"><i class="material-icons left">arrow_back</i>Volver</a></li>
      </ul>
    </div>
  </nav>

	<!--<div class="video-container">
        <iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
      </div> 

      <video class="responsive-video" controls>
    <source src="movie.mp4" type="video/mp4">
  </video> -->
 <div class="row center">
  <div class="col s12 m12 l6">
    <video controls="controls" style="max-width: 450px;"><source src="video/documental1.webm" type="video/webm" /></video>
  </div>


  <div class="col s12 m12 l6">
    <video controls="controls" style="max-width: 450px;"><source src="video/documental2.webm" type="video/webm" /></video>
  </div>
<div class="row center">
  <div class="col s12 m12 l6">
    <video controls="controls" style="max-width: 450px;"><source src="video/documental3.mp4" type="video/mp4" /></video>
  </div>
</div>

  <div class="col s12 m12 l6">
    <video controls="controls" style="max-width: 450px;"><source src="video/documental4.mp4" type="video/mp4" /></video>
  </div>

</div>


<!-- <audio id="player" src="audio/Mi Escuelita - Zulma Yúgar y Gerardo Arias Paz (Bolivia).flv.mp3" hidden="true"></audio>   -->

<script>
$(document).ready(function(){
       document.getElementById('player').play();
     document.getElementById('player').volume = 0.1;

    
});

</script>
</body>
</html>