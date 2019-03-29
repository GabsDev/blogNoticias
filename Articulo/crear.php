<?php

  
    include('Servidor/CRUD_Crear.php');
    include('Servidor/conexion.php');


    function mostrarSeleccionAutor()
    {
        global $db_connect;

        $query_select = "SELECT * FROM `Autor`";

       
        $result = mysqli_query($db_connect, $query_select);
    
        echo "<select name='idAutor' class='form-control'>";   
        echo "<option value='x'>* Seleccion el redactor</option>";
            $i = 1;
            while( $row = mysqli_fetch_array($result) )
            {
                echo"
                    <option value='".$row['id']."''>".$row['nombre']."</option>
                ";
                $i++;
            }

        echo "</select>";    
    }

    function mostrarSeleccionCategoria()
    {
        
        global $db_connect; 

        $query_select = "SELECT * FROM `Categoria`";

        $result = mysqli_query($db_connect, $query_select);

        echo "
            <select name='idCategoria' class='form-control'> 
            <option value='no-selection'>* Seleccion la categoria</option>
                
        ";
            $i = 1;
            while( $row = mysqli_fetch_array($result) )
            {
                echo"
                    <option value='".$row['id']."''>".$row['nombre']."</option>
                ";
                $i++;
            }

        echo "</select>";  
    }

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <title>Agregar Noticia</title>
    </head>
    <body>
            
        <div class="container">
            
            <h1>Agrege una noticia</h1>

            <br/>
                
            <a href="../index.php" class="btn btn-default btn-sm">Ver las noticias en el sistema</a>

            <br/>
            <br/>

            <form class="form-horizontal" role="form" method="post" action="Servidor/CRUD_Crear.php">
                <div class="form-group">
                    <label for="titulo" class="col-sm-2 control-label">Titulo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo noticia" required>
                    </div>
                </div>



                <form class="form-horizontal" role="form" method="post" action="Servidor/CRUD_Crear.php">
                <div class="form-group">
                    <label for="idAutor" class="col-sm-2 control-label">Seleccione el redactor</label>
                    <div class="col-sm-10">
                        
                        <?php mostrarSeleccionAutor() ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="idCategoria" class="col-sm-2 control-label">Seleccione la categoria</label>
                    <div class="col-sm-10">
                       
                        <?php mostrarSeleccionCategoria() ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contenido" class="col-sm-2 control-label">Contenido</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="contenido" name="contenido" placeholder="Contenido noticia" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Agregar Noticia</button>
                        <a href="../index.php" class="btn btn-danger">Cancelar</a>
                        <button type="reset" class="btn btn-default">Limpiar</button>
                    </div>
                </div>
            </form>

        </div>
        
    </body>
</html>