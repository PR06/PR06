<?php
include 'conexion.php';

extract($_REQUEST);

$sql = "SELECT * FROM tbl_proyecto INNER JOIN tbl_proyectoalumno ON tbl_proyecto.proyecto_id = tbl_proyectoalumno.pa_proyectoid INNER JOIN tbl_alumno ON tbl_proyectoalumno.pa_alumnoid=tbl_alumno.alumno_id WHERE proyecto_codigo='$codigo'";

$sql1="SELECT * FROM tbl_proyecto WHERE tbl_codigo='$codigo'";

$alumnos=mysqli_query($conexion, $sql);
$proyectos=mysqli_query($conexion, $sql1);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Class voting</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

		<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="../images/logo.svg" alt="" /></span>
						<h1>Class voting</h1>
						<p>Vota de manera rápida y online</p>
					</header>

		<!-- Main -->
					<div id="main">

		<!-- Introduction -->
							<section id="intro" class="main">
							<div class="proyecto">

							<?php
								while ($proyecto = mysqli_fetch_array($proyectos)) {
									echo "<div class='imagen-proyecto'>";
										echo "<img src='$proyecto[proyecto_imagen]'>";
									echo "</div>";
									echo "<div class='datos-proyecto'>";
										echo "<h2><b>Títol: </b>$proyecto[proyecto_nombre]</h2>";
									while ( $alumno=mysqli_fetch_array($alumnos)) {
										echo "<b>Membres: </b>$alumno[alumno_nombre] $alumno[alumno_apellido]";
								}

							?>
							</div>
							</section>
					</div>

		<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy;Jesuitas Joan XXIII</a>.</p>
					</footer>

			</div>

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