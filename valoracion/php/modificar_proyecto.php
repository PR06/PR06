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
			$proyecto_id=$_REQUEST['proyecto_id'];
			include("conexion.php");
			$query="SELECT * FROM tbl_proyecto WHERE proyecto_id='$proyecto_id'";
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
	<h1>Modificar dades del Projecte</h1>
	<form action="modificar_proyecto.proc.php?proyecto_id=<?php echo $row['proyecto_id']; ?>" method="post">
	<div>
	<input type="text" name="proyecto_nombre" placeholder="Nom Projecte" value="<?php echo $row['proyecto_nombre']; ?>" required>
	<input type="text" name="proyecto_fecha" placeholder="Data Projecte" value="<?php echo $row['proyecto_fecha']; ?>" required>
	<input type="text" name="proyecto_nota" placeholder="Nota del Projecte" value="<?php echo $row['proyecto_nota']; ?>" required>
	<input type="text" name="proyecto_tutor" placeholder="Tutor del Projecte" value="<?php echo $row['proyecto_tutor']; ?>" required>
	<input type="text" name="proyecto_comentarioTribunal" placeholder="Comentari del tribunal" value="<?php echo $row['proyecto_comentarioTribunal']; ?>" required>
	<input type="text" name="proyecto_estado" placeholder="Estat del Projecte" value="<?php echo $row['proyecto_estado']; ?>" required>
	<input type="text" name="proyecto_codigo" placeholder="Codi Projecte" value="<?php echo $row['proyecto_codigo']; ?>" required>
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