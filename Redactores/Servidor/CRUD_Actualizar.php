<?php


    if($_POST)
    {
        include('conexion.php');

         // guarda la informacion del metodo POST en variables 

        $idRedactor            =   $_POST['idRedactor'];
        $nombreRedactor          =   $_POST['nombreRedactor'];
        
        echo $idRedactor."<br/>";
        echo $nombreRedactor."<br/>";
       


         // se realiza la consulta SQL

        
        $query_update = 
        "UPDATE `Autor`
        SET
            nombre    =   '$nombreRedactor'
        
        WHERE
            id=$idRedactor
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