<?php

	include('conexion.php');

	// funcion para mostrar la consulta en la tabla articulo
	
	function mostrarArticulos()
	{
		
		global $db_connect;	
		$query_select = "SELECT Articulo.id, Articulo.titulo, Articulo.contenido, Categoria.nombre as categoria, Autor.nombre as redactor FROM Categoria, Articulo, Autor WHERE Categoria.id = Articulo.idCategoria AND Autor.id = Articulo.idAutor";

		$res = mysqli_query($db_connect, $query_select);

		
		echo "<table class='table table-hover'>";	

			echo"
				<tr>
					<td><h4>#</h4></td>
					<td><h4>Id Articulo</h4></td>
					<td><h4>Titulo</h4></td>
					<td><h4>Contenido</h4></td>
					<td><h4>Categoria</h4></td>
					<td><h4>Redactor</h4></td>
				</tr>
			";
			$i = 1;
			while( $row = mysqli_fetch_assoc($res) )
			{
				echo "
					<tr>
						<td>$i</td>
						<td>".$row['id']."</td>
						<td>".$row['titulo']."</td>
						<td>".$row['contenido']."</td>
						<td>".$row['categoria']."</td>
						<td>".$row['redactor']."</td>

						<td>
							<a href='Articulo/actualizar.php?id=".$row['id']."'>Editar</a> | <a href='Articulo/Servidor/CRUD_Borrar.php?id=".$row['id']."'>Borrar</a>
						</td>

					</tr>
				";
			$i++;
			}

		echo "</table>";	
	}
