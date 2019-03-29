<?php

    
    include('Servidor/CRUD_Actualizar.php');
    include('Servidor/conexion.php');
    
    if($_GET)
    {
        $id = $_GET['id'];
        $nombreRedactor = obtenerNombreRedactor($id);
       
    }

    function obtenerNombreRedactor($itemId)
    {
        global $db_connect;
        // set SELECT query
        $query_select =
        "SELECT nombre
        FROM `Autor`
        WHERE
        (
            id=".$itemId."
        )
        ";
        // execute SELECt query
        $result = mysqli_query($db_connect, $query_select);
        $row = mysqli_fetch_array($result);

        return $row['nombre'];
    }

?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <title>Actualizar Redactor</title>
    </head>
    <body>
            
        <div class="container">
            
            <h1>Actualice el redactor</h1>

            <br/>
                
            <a href="index.php" class="btn btn-default btn-sm">Ver Redactores</a>

            <br/>
            <br/>

            <form class="form-horizontal" role="form" method="post" action="Servidor/CRUD_Actualizar.php">
                <div class="form-group">
                    <label for="idRedactor" class="col-sm-2 control-label">Id Redactor</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="idRedactor"
                            name="idRedactor"
                            value="<?php echo $id; ?>"
                            readonly
                        >
                    </div>
                </div>
                <div class="form-group">
                    <label for="nombreRedactor" class="col-sm-2 control-label">Nombre Redactor</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            class="form-control"
                            id="nombreRedactor"
                            name="nombreRedactor"
                            placeholder="Nombre Redactor"
                            value="<?php echo $nombreRedactor; ?>"
                        >
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Actualize Redactor</button>
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                        <button type="reset" class="btn btn-default">Limpiar</button>
                    </div>
                </div>
            </form>

        </div>
        
    </body>
</html>