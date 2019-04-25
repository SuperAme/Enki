<?php 
    require ('..\EnkiCRUD\assets\php\conexion.php');
    session_start();
    $user = $_SESSION['usuario']['name'];
    $type = $_SESSION['usuario']['type'];
    if($type != 'C'){
        header('location: assets/php/logout.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Viviendas</title>
</head>
<body>
    <div class="col-12">
        <div class="row">
            <div class="form-group col-sm-4 col-lg-2">
                <label for="claveMat">Clave:</label>
                <input type="text" class="form-control" name="claveMat" placeholder="Buscar por clave..">
            </div>
            <div class="form-group col-sm-4 col-lg-2">
                <label for="claveMat">Clave:</label>
                <input type="text" class="form-control" name="claveMat" placeholder="Buscar por clave..">
            </div>
            <div class="form-group col-sm-4 col-lg-2">
                <label for="claveMat">Clave:</label>
                <input type="text" class="form-control" name="claveMat" placeholder="Buscar por clave..">
            </div>
        </div>
    </div>
    <div class="table-responsive" id="ViviendasTable">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Propietario</th>
                    <th>Precio</th>
                    <th>Recamaras</th>
                    <th>Modalidad</th>
                    <th>País</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody class="list">

            </tbody>
        </table>
    </div>
</body>
</html>