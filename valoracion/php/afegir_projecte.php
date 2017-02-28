<?php
require('conexion.php');
session_start();

if(isset($_SESSION['admin'])){
	echo "Bienvenido Administrador  <br/>";
	echo "<a href='cerrar_sesion.proc.php'><i class='fa fa-sign-out fa-2x' aria-hidden='true' title='
Tancar sessió'></i></a><br/>";
	echo "<a href='principal_admin.php'><i class='fa fa-arrow-circle-left fa-2x' aria-hidden='true' title='Enrere'></i></a></br>";
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
		<link rel="stylesheet" href="../assets/css/main3.css" />
		<script src="http://code.jquery.com/jquery.js"></script>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
	
		<!-- Wrapper -->
	<div id="wrapper">
		<!-- Nav -->
	<h1>Afegir nou Projecte</h1>
	<form action="afegir_projecte.proc.php" enctype="multipart/form-data" method="POST">
	<div>
	<input type="text" name="proyecto_nombre" placeholder="Nom del nou Projecte" value="" required>
	<input type="text" name="proyecto_fecha" placeholder="Data del projecte **AAAA-MM-DD**HH:MM:SS" value="" required>
	<input type="text" name="proyecto_nota" placeholder="Nota del projecte" value="" required>
	<input type="text" name="proyecto_tutor" placeholder="Tutor del projecte" value="" required>
	<input type="text" name="proyecto_comentarioTribunal" placeholder="Comentari del tribunal" value="" required>
	<input type="text" name="" placeholder="En curso" value="" readonly="readonly">
	<input type="text" name="proyecto_codigo" placeholder="Codi del projecte" value="" required>
	Portada Projecte <input type="file" name="proyecto_imagen" title="Adjunta Portada Projecte"></br></br>
	<input type="submit" value="Afegir">
	</div>
	</form>
	</div>

	
		<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy;Jesuitas Joan XXIII 2017</a></p>
					</footer>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</body>
</html>