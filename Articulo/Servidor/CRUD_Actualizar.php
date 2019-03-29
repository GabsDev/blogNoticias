<?php

  
    if($_POST)
    {
        include('conexion.php');

        // guarda la informacion del metodo POST en variables 

        $post_id          =   $_POST['id'];
        $post_titulo      =   $_POST['titulo'];
        $post_contenido     =   $_POST['contenido'];
        $post_idCategoria   =   $_POST['idCategoria'];
        $post_idAutor       =   $_POST['idAutor'];

       
       // se realiza la consulta SQL
        $query_update = 
        "UPDATE `Articulo`
        SET
            titulo      =   '$post_titulo',
            contenido   =  '$post_contenido',
            idCategoria =  '$post_idCategoria',
            idAutor     =  '$post_idAutor'
        
        WHERE
            id=$post_id
        ";


        if( mysqli_query($db_connect, $query_update) )
        {
          
            header("location: ../index.php");

        }
        else
        {
            // the failed.
            echo 'La consulta fallo...';
        }

        // close database connection

        mysqli_close($db_connect);
    }

/* END of script */

?>