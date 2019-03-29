<?php

	include('conexion.php');

	// funcion para mostrar la consulta en la tabla articulo
	
	function mostrarCategoria()
	{
		
		global $db_connect;	
		$query_select = "SELECT * FROM `Categoria`";

		$resultado = mysqli_query($db_connect, $query_select);

		
		echo "<table class='table table-hover'>";	

			echo"
				<tr>
					<td><h4>#</h4></td>
					<td><h4>Id Categoria</h4></td>
					<td><h4>Nombre</h4></td>
				</tr>
			";
			$i = 1;
			while( $row = mysqli_fetch_array($resultado) )
			{
				echo "
					<tr>
						<td>$i</td>
						<td>".$row['id']."</td>
						<td>".$row['nombre']."</td>
						<td>
							<a href='actualizar.php?id=".$row['id']."'>Editar</a> | <a href='Servidor/CRUD_Borrar.php?id=".$row['id']."'>Borrar</a>
						</td>

					</tr>
				";
			$i++;
			}

		echo "</table>";	
	}
