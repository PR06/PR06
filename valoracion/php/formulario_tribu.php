<?php 
include 'conexion.php';
				extract($_REQUEST);

	$sql_alumno1 = "SELECT * FROM tbl_alumno LEFT JOIN tbl_proyecto on tbl_proyecto.proyecto_id = tbl_alumno.alumno_proyectoid WHERE proyecto_id = '$id' ";
				$alumnos = mysqli_query($conexion, $sql_alumno1);

				$num_alumnos = mysqli_num_rows($alumnos);

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

	</head>
	<body>
	
		<!-- Wrapper -->
			<div id="wrapper">

		<!-- Header -->
			<header id="header" class="alt">
						
			</header>

		<!-- Nav -->
			<nav id="nav">
				Valoración del Tribunal
			</nav>

		<!-- Main -->
			<div id="main">
			<form action="formulario_tribu.proc.php" method="post">
				<!-- Vizualizar la parte oral del publico -->
				<?php
				
				$sql1 = "SELECT * FROM tbl_preguntatribunal WHERE prtri_tipo = 'oral' ";
				$preguntaOral1 = mysqli_query($conexion,$sql1);

				//echo "$sql";die;


				echo "<h2><b><u>Presentació Oral</u></b></h2>";
				$i=$num_alumnos;

				while ($pregunta1 = mysqli_fetch_array($preguntaOral1)) {
					$sql_alumno1 = "SELECT * FROM tbl_alumno LEFT JOIN tbl_proyecto on tbl_proyecto.proyecto_id = tbl_alumno.alumno_proyectoid WHERE proyecto_id = '$id' ";
				$alumnos1 = mysqli_query($conexion, $sql_alumno1);

				?>
				
				<h3><?php echo "$pregunta1[prtri_pregunta]"; ?></h3>
					<table >
						
				<?php while($alumno = mysqli_fetch_array($alumnos1)){ ?>
						<tr style="height: 40px;">
							<td  id="alumno" name="alumno"><?php echo "$alumno[alumno_nombre]"; ?></td>
							<td><input type="text" name = "<?php echo "$i"; $i++; ?>"></td>
							
						</tr>
				<?php 
				} 
				?>
					</table>
				<?php 
				}
				?>
				<!-- Vizualizar la parte del contenido del publico -->
				<?php
				$sql2 = "SELECT * FROM tbl_preguntatribunal WHERE prtri_tipo = 'contenido' ";
				$preguntaOral2 = mysqli_query($conexion,$sql2);

			


				echo "<h2><b><u>Continguts</u></b></h2>";

				while ($pregunta12 = mysqli_fetch_array($preguntaOral2)) {
					$sql_alumno2 = "SELECT * FROM tbl_proyecto WHERE proyecto_id = '$id' ";
				$alumnos2 = mysqli_query($conexion, $sql_alumno2);
				?>
				
				<h3><?php echo "$pregunta12[prtri_pregunta]"; ?></h3>
					<table >
						
				<?php while($alumno = mysqli_fetch_array($alumnos2)){ ?>
						<tr style="height: 40px;">
							<td  id="alumno" name="alumno"><?php echo "$alumno[proyecto_nombre]"; ?></td>
							<td><input type="text" name='<?php echo "$i"; $i++; ?>' ></td>
						
						</tr>
				<?php 
				} 
				?>
					</table>
				<?php 
				}
				?>
				<input type="submit" name="">

				</form>

					
				
            </div>



		<!-- Introduction -->
		

		<!-- Second Section -->
							

		<!-- Get Started -->
							

					

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