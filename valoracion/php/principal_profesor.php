<?php
require('conexion.php');
session_start();

if(isset($_SESSION['profesor'])){
	//echo "Bienvenidos Tribunal  ";
	echo "<a href='cerrar_sesion.proc.php'><i class='fa fa-sign-out fa-2x' aria-hidden='true' title='Logout'></i></a><br/>";
	$id = $_SESSION['profesor'];
} else {
	header("Location: ../index.html");
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Class voting</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<script src="http://code.jquery.com/jquery.js"></script>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script type="text/javascript">
			
			function objetoAjax(){
					var xmlhttp=false;
					try {
						xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
					} catch (e) {
				 
						try {
							xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
						} catch (E) {
							xmlhttp = false;
						}
					}
				 
					if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
					  xmlhttp = new XMLHttpRequest();
					}
					return xmlhttp;
				}

				function enviarDatos(url, id){
			
				  var ajax=objetoAjax();
				 
				  ajax.open("POST", url,true);
				  ajax.onreadystatechange=function() {
				  	if (ajax.readyState==4) {
						document.getElementById('main').innerHTML = ajax.responseText;
					}
				  }
				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  				ajax.send("id="+id);
				}


				function filtrarProyecto(id){
					 var ajax=objetoAjax();

					var filtro = document.getElementById('filtro').value;

				 
				  ajax.open("POST", 'filtrarProyecto.php',true);
				  ajax.onreadystatechange=function() {
				  	if (ajax.readyState==4) {
						document.getElementById('main2').innerHTML = ajax.responseText;
					}
				  }
				ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
  				ajax.send("filtro="+filtro+"&id="+id);
				}


				function noVot(){
					alert("No pots valorar aquest projecte");
				}


		window.onload = enviarDatos('profesor_proyecto.php', <?php echo $id;?>); 		
		</script>
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">
		<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#" id="1" onclick="enviarDatos('profesor_proyecto.php', <?php echo $id;?>);">Projectes</a></li>
							<li><a href="#" id="2" onclick="enviarDatos('profesor_notas.php', <?php echo $id;?>);">Notes</a></li>
							<li><a href="#" id="3" onclick="enviarDatos('profesor_estadisticas.php', <?php echo $id;?>);">Estadístiques</a></li>
						</ul>
					</nav>


				<div id="main">

            	</div>
            </div>

		<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy;Jesuitas Joan XXIII 2017</a></p>
					</footer>

			

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>
	</body>
</html>