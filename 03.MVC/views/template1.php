<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PÁGINA práctica</title>

	<style>
		header{
			text-align: center;
		}
		nav{
			background: black;
			padding: 1px;
		}
		nav ul li{
			display: inline-block;
			margin: 0px 7px;
		}
		nav ul li a{
			text-decoration: none;	
			color: white;
			margin: 0px;
			font-size: 1.2em;
		}

		section{
			background: yellow;
			padding: 10px;
			margin:10px;
		}
	</style>
</head>
<body>

	<header>
		<h3>UNAJMA</h3>
	</header>

	<nav>
		<?php
			include "modulo1/navegacion.php"
		?>
	</nav>

	<section>

		<?php 
			$vista = new Template();
			$vista->navegarPagina();
		 ?>

	</section>

</body>
</html>