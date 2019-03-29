<?php

	// Verifica si es metdodo POST?recoge la informacion

	if($_POST)
	{

		include('conexion.php');

		// recoje la informacion del metodo POST

		$post_titulo		=	$_POST['titulo'];
		$post_contenido	    =	$_POST['contenido'];
		$post_idCategoria	=	$_POST['idCategoria'];
		$post_idAutor	    =	$_POST['idAutor'];

		$query_insert = 
		"INSERT INTO `Articulo`
		(
			titulo,
			contenido,
			idCategoria,
			idAutor
		)
		VALUES
		(
			'".$post_titulo."',
			'".$post_contenido."',
			'".$post_idCategoria."',
			'".$post_idAutor."'
		)
		";

		// ejecuta y verifica la consulta

		if( mysqli_query($db_connect, $query_insert) )
		{
			// la sentencia fue exitosa
			header("location: ../../index.php");

		}
		else
		{
			// la sentencia fallo
			echo 'Fallo al crear el articulo...';
		}

		// cierra la conexion

		mysqli_close($db_connect);
	}



?>