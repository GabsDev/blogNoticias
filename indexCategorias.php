<?php

	// Script para mostrar tabla Articulo mediante la funcion mostrarArticulo()
	include('Articulo/Servidor/CRUD_Categorias.php');

?>

<!doctype html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">



	    <title>Blog Noticias</title>

	</head>
	<body>

		<div class="container">
			
			<h1>Noticias por Categorias</h1>
			<br/>
			<header>
				<ul class="nav nav-tabs">
					<li><a href="index.php">Noticias</a></li>
					<li class="active"><a href="indexCategorias.php">Noticias por Categorias</a></li>
					<li><a href="Categorias/index.php">Categorias</a></li>
					<li><a href="Redactores/index.php">Redactores</a></li>

				</ul>
			</header>

			<br/>
				
				<a href="Articulo/crear.php" class="btn btn-default btn-sm">+ Agregar Noticia</a>
				<br/>
				<br/>

				<!-- Lista las noticias -->

				<?php
					mostrarArticulosCategorias();
				?>
			
		</div>
		
	</body>
</html>