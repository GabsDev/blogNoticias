<?php

    include('Servidor/CRUD_Crear.php');

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

        <title>Nueva Categoria</title>
    </head>
    <body>
            
        <div class="container">
            
            <h1>Nuestras Categorias</h1>
            <br/>
            <header>
               <ul class="nav nav-tabs">
                    <li><a href="../index.php">Noticias</a></li>
                    <li class="active"><a href="index.php">Categorias</a></li>
                    <li><a href="../Redactores/index.php">Redactores</a></li>
                </ul>
            </header>

            <h3>Agregar Categoria</h3>

            <br/>
                
            <a href="index.php" class="btn btn-default btn-sm"><- Regresar</a>

            <br/>
            <br/>

            <form class="form-horizontal" role="form" method="post" action="Servidor/CRUD_Crear.php">
                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre Categoria</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Categoria" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Agregar Categoria</button>
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                        <button type="reset" class="btn btn-default">Limpiar</button>
                    </div>
                </div>
            </form>

        </div>
        
    </body>
</html>