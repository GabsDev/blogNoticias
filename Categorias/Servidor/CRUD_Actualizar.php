<?php


    if($_POST)
    {
        include('conexion.php');

        // guarda la informacion del metodo POST en variables 
        $idCategoria            =   $_POST['idCategoria'];
        $nombreCategoria          =   $_POST['nombreCategoria'];
        
        echo $idCategoria."<br/>";
        echo $nombreCategoria."<br/>";
       

        // se realiza la consulta SQL
        $query_update = 
        "UPDATE `Categoria`
        SET
            nombre    =   '$nombreCategoria'
        
        WHERE
            id=$idCategoria
        ";

     
        if( mysqli_query($db_connect, $query_update) )
        {
            
            header("location: ../index.php");
        }
        else
        {
          
            echo 'La actualizacion fallo';
        }

    

        mysqli_close($db_connect);
    }
?>