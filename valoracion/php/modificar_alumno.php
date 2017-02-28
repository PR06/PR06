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

<?php
			$alumno_id=$_REQUEST['alumno_id'];
			include("conexion.php");
			$query="SELECT * FROM tbl_alumno WHERE alumno_id='$alumno_id'";
			$resultado=$conexion->query($query);
			$row=$resultado-> fetch_assoc();
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
	<h1>Modificar dades dels Alumnes</h1>
	<form action="modificar_alumno.proc.php?alumno_id=<?php echo $row['alumno_id']; ?>" method="post">
	<div>
	<input type="text" name="alumno_nombre" placeholder="Nom Alumne" value="<?php echo $row['alumno_nombre']; ?>" required>
	<input type="text" name="alumno_apellido" placeholder="Cognom Alumne" value="<?php echo $row['alumno_apellido']; ?>" required>
	<input type="text" name="alumno_curso" placeholder="Curs Alumne" value="<?php echo $row['alumno_curso']; ?>" required>
	<input type="text" name="alumno_proyectoid" placeholder="ID projecte" value="<?php echo $row['alumno_proyectoid']; ?>" required>
	<input type="submit" value="Cambiar">
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