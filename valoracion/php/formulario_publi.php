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
				Valoració del Públic
			</nav>

		<!-- Main -->
			<div id="main">
				<!-- Vizualizar la parte oral del publico -->
				<?php
				include 'conexion.php';
				extract($_REQUEST);
				$sql = "SELECT * FROM tbl_preguntapublico WHERE prpu_tipo = 'oral' ";
				$preguntaOral = mysqli_query($conexion,$sql);

				//echo "$sql";die;


				echo "<h2><b><u>Presentació Oral</u></b></h2>";

				while ($pregunta1 = mysqli_fetch_array($preguntaOral)) {
					$sql_alumno = "SELECT * FROM tbl_alumno LEFT JOIN tbl_proyecto on tbl_proyecto.proyecto_id = tbl_alumno.alumno_proyectoid WHERE proyecto_id = '$id' ";
				$alumnos = mysqli_query($conexion, $sql_alumno);
				?>
				
				<h3><?php echo "$pregunta1[prpu_pregunta]"; ?></h3>
					
					<table >
						<tr>
							<td></td>
							<td><img src="" width="50"></td>
							<td><img src="../images/3.png" width="50"></td>
							<td><img src="../images/3.png" width="50"></td>
							<td><img src="../images/3.png" width="50"></td>
							<td><img src="../images/10.png" width="50"></td>
						</tr>
					
				<?php while($alumno = mysqli_fetch_array($alumnos)){ ?>
						<tr style="height: 40px;">
							<td  id="alumno" name="alumno"><?php echo "$alumno[alumno_nombre]"; ?></td>
							<td><input type="radio" value=0></td>
							<td><input type="radio" value=2 ></td>
							<td><input type="radio" value=5></td>
							<td><input type="radio" value=7></td>
							<td><input type="radio" value=10></td>
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
				include 'conexion.php';
				extract($_REQUEST);
				$sql = "SELECT * FROM tbl_preguntapublico WHERE prpu_tipo = 'contenido' ";
				$preguntaOral = mysqli_query($conexion,$sql);

			


				echo "<h2><b><u>Continguts</u></b></h2>";

				while ($pregunta1 = mysqli_fetch_array($preguntaOral)) {
					$sql_alumno = "SELECT * FROM tbl_proyecto WHERE proyecto_id = '$id' ";
				$alumnos = mysqli_query($conexion, $sql_alumno);
				?>
				
				<h3><?php echo "$pregunta1[prpu_pregunta]"; ?></h3>
					<table >
						<tr>
							<td></td>
							<td><img src=":-)" width="50"></td>
							<td><img src="../images/3.png" width="50"></td>
							<td><img src="../images/3.png" width="50"></td>
							<td><img src="../images/3.png" width="50"></td>
							<td><img src="../images/10.png" width="50"></td>
						</tr>
				<?php while($alumno = mysqli_fetch_array($alumnos)){ ?>
						<tr style="height: 40px;">
							<td  id="alumno" name="alumno"><?php echo "$alumno[proyecto_nombre]"; ?></td>
							<td><input type="radio" value=0></td>
							<td><input type="radio" value=2></td>
							<td><input type="radio" value=5></td>
							<td><input type="radio" value=7></td>
							<td><input type="radio" value=10></td>
						</tr>
				<?php 
				} 
				?>
					</table>
				<?php 
				}
				?>
				Nom del que avalua:
				<input type="text" name="" required>
				Cognoms del que avalua:
				<input type="text" name="" required>
				Tipus de públics:
				<select required>
					<option value="0">Elige una opción</option>
					<option value="1">Alumno</option>
					<option value="2">Otros</option>
				</select>
				Curso del Alumne:
				<input type="text" name="">
				Te han interessat el tema?
				<textarea name="comentarios" rows="10" cols="20">Escribe aquí tus comentarios</textarea>
				<input type="submit" name="">

					
					
				
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