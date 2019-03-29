<?php

	// include script for the database connection
	include('servidor/CRUD_Leer.php');

?>

<!doctype html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	    <title>Redactores</title>
	</head>
	<body>
	    	
		<div class="container">
			
			<h1>Nuestros Redactores</h1>
			<br/>
			<header>
				<ul class="nav nav-tabs">
					<li><a href="../index.php">Noticias</a></li>
					<li><a href="../indexCategorias.php">Noticias por Categorias</a></li>
					<li><a href="../Categorias/index.php">Categorias</a></li>
					<li class="active"><a href="index.php">Redactores</a></li>
				</ul>
			</header>

			<br/>
				
				<a href="crear.php" class="btn btn-default btn-sm">+ Agregar Redactor</a>
				<br/>
				<br/>

				<!--Lista las categorias -->

				<?php
					mostrarRedactores();
				?>
			
		</div>
		
	</body>
</html>