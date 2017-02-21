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
		<script type="text/javascript">
			
		function validar(){
			if (document.getElementById('form').codigo.value==""){
				alert("Introduce el codigo del producto");
				document.getElementById('form').codigo.focus();
				return false;
			}

			return true;
		}

		</script>
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
							<div class="error">
							<?php
								?>
							</div>
								<h2>Introduce el codigo del  proyecto</h2>
							<form action="codigo.proc.php" method="post" id="form" onsubmit="return validar();">
								<input type="text" name="codigo"><br/>
								<input type="submit" name="enviar" value="Enviar">								
							</form>
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