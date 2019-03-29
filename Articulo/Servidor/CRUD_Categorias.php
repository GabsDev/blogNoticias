<?php

	include('conexion.php');

	// funcion para mostrar la consulta en la tabla articulo
	
	function mostrarArticulosCategorias()
	{
		
		global $db_connect;	
		$query_select = "SELECT Categoria.nombre as categoria, Articulo.titulo, Autor.nombre as redactor FROM Categoria, Articulo, Autor WHERE Categoria.id = Articulo.idCategoria AND Autor.id = Articulo.idAutor ORDER BY Categoria.nombre  ASC";


		$res = mysqli_query($db_connect, $query_select);

		
		echo "<table class='table table-hover'>";	

			echo"
				<tr>
					<td><h4>#</h4></td>
					<td><h4>Categoria</h4></td>
					<td><h4>Titulo</h4></td>
					<td><h4>Redactor</h4></td>
					
				</tr>
			";
			$i = 1;
			while( $row = mysqli_fetch_assoc($res) )
			{
				echo "
					<tr>
						<td>$i</td>
						<td>".$row['categoria']."</td>
						<td>".$row['titulo']."</td>
						<td>".$row['redactor']."</td>
						<td>
						</td>
					</tr>
				";
			$i++;
			}

		echo "</table>";	
	}
