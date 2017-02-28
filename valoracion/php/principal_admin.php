<?php
require('conexion.php');
session_start();

if(isset($_SESSION['admin'])){
	echo "Bienvenido Administrador  ";
	echo "<a href='cerrar_sesion.proc.php'><i class='fa fa-sign-out fa-2x' aria-hidden='true' title='Logout'></i></a><br/>";
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

<!--Profesors -->

		<!-- Wrapper -->
			<div id="wrapper">
		<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="afegir_profesor.php">Afegir un professor</a></li>
						</ul>
					</nav>	
	
	<table border="2">
		<thead>
		<tr>
			<th colspan="4"></th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Correo</td>
				<td>Password</td>
			</tr>
			<?php
			include("conexion.php");
			$query="SELECT * FROM tbl_profesor";
			$resultado=$conexion->query($query);
			while($row=$resultado-> fetch_assoc()){
			?>
			<tr>
			<td><?php echo $row['profesor_id']; ?></td>
			<td><?php echo $row['profesor_nombre']; ?></td>
			<td><?php echo $row['profesor_apellido']; ?></td>
			<td><?php echo $row['profesor_correo']; ?></td>
			<td><?php echo $row['profesor_password']; ?></td>
			<?php $profesor_id=$row['profesor_id']; ?>
			

			<td><a href="modificar_profesor.php?profesor_id=<?php echo $profesor_id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
						
			<td><a href="eliminar_profesor.php?profesor_id=<?php echo $profesor_id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
			<?php
			}
			?>

		</tbody>
	</table>
	</div>

<!--Proyectos -->

			<div id="wrapper">
		<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="afegir_projecte.php">Afegir un projecte</a></li>
						</ul>
					</nav>	
	
	<table border="2">
		<thead>
		<tr>
			<th colspan="4"></th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nom projecte</td>
				<td>Imatge projecte</td>
				<td>Data projecte</td>
				<td>Nota del projecte</td>
				<td>Tutor del projecte</td>
				<td>Comentari tribunal</td>
				<td>Estat del projecte</td>
				<td>Codi del projecte</td>
			</tr>
			<?php
			include("conexion.php");
			$query="SELECT * FROM tbl_proyecto";
			$resultado=$conexion->query($query);
			while($row=$resultado-> fetch_assoc()){
			?>
			<tr>
			<td><?php echo $row['proyecto_id']; ?></td>
			<td><?php echo $row['proyecto_nombre']; ?></td>
			<td><?php echo $row['proyecto_imagen']; ?></td>
			<td><?php echo $row['proyecto_fecha']; ?></td>
			<td><?php echo $row['proyecto_nota']; ?></td>
			<td><?php echo $row['proyecto_tutor']; ?></td>
			<td><?php echo $row['proyecto_comentarioTribunal']; ?></td>
			<td><?php echo $row['proyecto_estado']; ?></td>
			<td><?php echo $row['proyecto_codigo']; ?></td>
			<?php $proyecto_id=$row['proyecto_id']; ?>
			

			<td><a href="modificar_proyecto.php?proyecto_id=<?php echo $proyecto_id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
						
			<td><a href="eliminar_proyecto.php?proyecto_id=<?php echo $proyecto_id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
			<?php
			}
			?>

		</tbody>
	</table>
	</div>

<!--Alumnes -->

			<div id="wrapper">
		<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="afegir_alumne.php">Afegir un Alumne</a></li>
						</ul>
					</nav>	
	
	<table border="2">
		<thead>
		<tr>
			<th colspan="4"></th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nom alumne</td>
				<td>Cognom alumne</td>
				<td>Curs alumne</td>
				<td>ID Projecte del alumne</td>
			</tr>
			<?php
			include("conexion.php");
			$query="SELECT * FROM tbl_alumno";
			$resultado=$conexion->query($query);
			while($row=$resultado-> fetch_assoc()){
			?>
			<tr>
			<td><?php echo $row['alumno_id']; ?></td>
			<td><?php echo $row['alumno_nombre']; ?></td>
			<td><?php echo $row['alumno_apellido']; ?></td>
			<td><?php echo $row['alumno_curso']; ?></td>

			<?php $alumno_id=$row['alumno_id']; ?>
			

			<td><a href="modificar_alumno.php?alumno_id=<?php echo $alumno_id; ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
						
			<td><a href="eliminar_alumno.php?alumno_id=<?php echo $alumno_id; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
			</tr>
			<?php
			}
			?>

		</tbody>
	</table>
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