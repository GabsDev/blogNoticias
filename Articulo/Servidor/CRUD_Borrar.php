<?php

	
	if($_GET)
	{

		include('conexion.php');

		$get_id	 =	$_GET['id'];

		$query_insert = 
		"DELETE FROM `Articulo`
		WHERE
		(
			id=".$get_id."
		)
		";

		
		if( mysqli_query($db_connect, $query_insert) )
		{	
			
			header("location: ../../index.php");

		}
		else
		{
			
			echo 'La consulta fallo...';
		}

	

		mysqli_close($db_connect);
	}



?>