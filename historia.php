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

	<title>Historia - SITCS</title>
	
<style>
.fuente{
	font-family: Homestead Display;
	color: red;

}
body {
  /* Ubicación de la imagen */
  background-image: url(img/moneda5.jpg);
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
  background-color: #464646;
}

@media only screen and (max-width: 767px) {

/* NO MOSTRAR ELEMENTOS MENORES A ESTA RESOLUCION*/

}

@media (min-width: 700px) {

	.imag{
		max-width: 40%;
    	height: auto;
	}
	.imag2{
		max-width: 50%;
    	height: auto;
	}

}
</style>

</head>
<body>
	<nav>
	    <div class="nav-wrapper" style="background-color: #ff5f00;">
	      <a href="#" class="brand-logo fuente center" ><span id="titulo1">HISTORIA</span></a>
	      
	      <ul id="nav-mobile" class="left hide-on-med-and-down">
	        <li><a href="" onclick="history.back()"><i class="material-icons left">arrow_back</i>Volver</a></li>
	      </ul>
	    </div>
	</nav>


	<div class="row">
	<div class="col s10 m9">
	  <div class="card darken-1">
	    <div class="card-content black-text">
	    <span class="card-title red-text fuente center"><h2>Archivos de historia</h2></span>
	      <span class="card-title red-text">ARCHIVO <br>CASA NACIONAL DE MONEDA</span>
	      

			<p>
			En  1910, siendo don Nicanor Serrudo, Prefecto; don Miguel Tórres G., Presidente del Concejo Municipal y don Néstor Gutiérrez, Presidente del Comité de Festejo, prepararon en 30 de octubre de este año una “Ordenanza y Programa del festejos del Centenario del 10 de Noviembre”, donde incluía la inauguración de un “Museo Mineralógico en la Casa Nacional de Moneda” para el día 11 de noviembre.
			 
			En 1929, con el apoyo del Presidente de la República Dr. Hernando Siles, se decide oficialmente que la Casa de Moneda sea convertida en Museo y Archivo Histórico, tal como sugerían con entusiasmo instituciones, preclaros ciudadanos y la colectividad potosina en su conjunto. Esta responsabilidad fue encomendada al pintor potosino Cecilio Guzmán de Rojas que fue nombrado Director Nacional de Bellas Artes.
			 
			El 5 de octubre de 1940, el Presidente de la Nación Gral. Enrique Peñaranda mediante un Decreto Supremo entrega la Casa de Moneda a la Sociedad Geográfica y de Historia para su administración. El 3 de febrero de 1941 se concreta la firma de los documentos y el proyecto del Museo de Arte y de Archivo Histórico cobra fuerza pese a la complejidad del trabajo, Alberto Berríos, Domingo Flores López y Armando Alba destacan como visionarios organizadores.
			 Desde el 31 de julio de 1969 y por posteriores disposiciones legales, la Casa Nacional de Moneda depende del Banco Central de Bolivia.
			 
			Con el financiamiento del Banco Central de Bolivia se realizaron numerosas obras de restauración, conservación  y mejoramiento, como así también una permanente labor de promoción y divulgación.
			 
			Mediante Ley Nº 1670 del 31 de octubre de 1995 se crea la Fundación Cultural del Banco Central de Bolivia.
			 
			Y a partir del 1º de julio de 1997 según ley la Casa Nacional de Moneda pasa a depender de la Fundación Cultural de Banco Central de Bolivia. 
			 
			Museo y Archivo Histórico, marchan juntos custodiando, promoviendo y difundiendo el patrimonio museológico y documental.
			 
			Como Museo y Archivo Histórico, la Casa de Moneda es el centro cultural más grande e importante de Bolivia y uno de los más conocidos de América y en el ámbito internacional.
		</p>

		<span class="card-title red-text">ARCHIVO HISTÓRICO</span>

		<p>Existen dos causas fundamentales para la creación del Archivo Histórico.
			La primera causa fue que cuando se quería revisar algún documento de la época colonial no se sabía dónde encontrarlo, ni a quién dirigirse para solicitarlo.
			Los archivos existentes se hallaban en desorden en distintas oficinas públicas y no existía un empleado que pudiera prestar algún informe, de manera que era como si no existieran ya que no prestaban ningún servicio.
			 
			La segunda causa fue que los empleados encargados de dichos archivos hacían mal uso de los fondos documentales, cuando necesitaban algún pergamino destruían un valioso documento para negociar con el forro de cuero.
			Por eso era urgente que lo poco que quedara de documentos coloniales, reunirlos en un solo edificio.
			 
			El Archivo Histórico nació con algunos fondos documentales, poco a poco se fue incrementando y hoy en día cuenta con 23 Secciones abarcando los años de 1550 - 1985. Además posee una Biblioteca, Hemeroteca, Planoteca y Mapoteca.</p>

		<br>
		<div class="card-image">
		<center><img src="img/arch1.jpg" alt="Archivo Histórico." class="imag"></center>
		</div>
		<br>
		<span class="card-title red-text">ARCHIVO</span>

		<p>Responde a las instituciones coloniales y republicanas que han generado la documentación producto de la actividad humana y de la gestión administrativa de la época.
		Su interés e importancia radica sobre todo en la antigüedad y continuidad de la documentación manuscrita, ya que algunos, como las Cajas Reales, Casa de Moneda, Banco Real de San Carlos y Escrituras Notariales, encierran información de la vida administrativa y social de la Villa Imperial de Potosí desde 1550.</p>
		<br>
		<div class="card-image">
	
	 		<center><img src="img/LIBRO1.png" alt="Archivo Histórico." class="imag"></center><br>
	 		<center><img src="img/LIBRO2.png" alt="Archivo Histórico." class="imag"></center><br>
	 		<center><img src="img/arch2.png" alt="Archivo Histórico." class="imag"></center><br>
	 		<center><img src="img/arch3.png" alt="Archivo Histórico." class="imag"></center><br>
		
		</div>
		<span class="card-title red-text">BIBLIOTECA</span>
		<p>A un principio considerada auxiliar del Archivo por las pocas colecciones con que contaba; ahora con más de 6.000 títulos conforma una de las más completas en historia, arte, cultura y numismática de la ciudad de Potosí y de Bolivia.</p>

		<div class="card-image">
			<center><img src="img/biblio1.jpg" alt="Archivo Histórico." class="imag"></center><br>
	 		<center><img src="img/bilbio2.jpg" alt="Archivo Histórico." class="imag"></center><br>
	 		<center><img src="img/biblio4.jpg" alt="Archivo Histórico." class="imag"></center><br>
 		</div>
 		<p>El incremento de los fondos bibliográficos responde a la donación de instituciones y familias que voluntariamente hicieron llegar a la Biblioteca sus colecciones.</p>
 
		<p>* Hemeroteca: al igual que los otros fondos documentales, encierra una valiosa información del momento, con periódicos de distintos departamentos, en especial de Potosí.</p>
 
		<p>Su interés radica en la información cronológica que el investigador puede encontrar desde 1838 hasta nuestros días.</p>
 
		<p>* Mapoteca/Planoteca: pese a los pocos ejemplares con que cuenta, es importante, ya que los recursos documentales gráficos permiten a los investigadores acercarse con mayor objetividad al estudio de la geografía para sus trabajos de investigación científica</p>
	    </div>
	  </div>
	</div>
	
	<div class="col s2 m2">
	  <div class="card darken-1">
	    <div class="card-image">
			<center><img src="img/arch4.png" class="imag2"></center><br><br><br>
			<center><img src="img/arch5.png" class="imag2"></center><br><br><br>
			<center><img src="img/arch6.png" class="imag2"></center><br><br><br>
			<center><img src="img/arch7.png" class="imag2"></center><br><br><br>
			<center><img src="img/arch8.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO1.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO2.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO3.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO4.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO5.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO6.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO7.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO8.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO9.png" class="imag2"></center><br><br><br>
			<center><img src="img/BILBIO10.png" class="imag2"></center><br><br><br>
			<center><img src="img/libro.png" class="imag2"></center><br><br><br>
			<center><img src="img/libro1.jpg" class="imag2"></center><br><br><br>
			<center><img src="img/libros3.png" class="imag2"></center><br><br><br>
			<center><img src="img/libros4.png" class="imag2"></center><br><br><br>
			<center><img src="img/libros5.png" class="imag2"></center><br><br><br>
	    </div>
	  </div>
	</div>
  </div>

<audio id="player" src="audio/Mi Escuelita - Zulma Yúgar y Gerardo Arias Paz (Bolivia).flv.mp3" hidden="true"></audio>

<script>
	 $(document).ready(function(){

  
      $('.materialboxed').materialbox();

      $('.slider').slider({full_width: true});
     document.getElementById('player').play();
     document.getElementById('player').volume = 0.3;

    });

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