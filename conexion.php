<?php
$db_host 		=	"localhost";
$db_username 	=	"root";	
$db_password 	=	"";		
$db_name 		=	"sitioNoticias";			
	
// Crea la conexion
$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);


//Termina el programa si no consigue la conexion con la base de datos y da el error.
if( mysqli_connect_errno() )
	{
		die('<br/>Fallo al conectarse a la base de datos.' . mysqli_connect_error());
	}
?>