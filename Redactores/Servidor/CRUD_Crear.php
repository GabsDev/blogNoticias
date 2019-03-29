<?php

	// Verifica si es metdodo POST?recoge la informacion

	if($_POST)
	{

		include('conexion.php');

		// recoje la informacion del metodo POST

		$post_nombre =	$_POST['nombre'];
		
		$query_insert = 
		"INSERT INTO `Autor`
		(
			nombre
		)
		VALUES
		(
			'".$post_nombre."'
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