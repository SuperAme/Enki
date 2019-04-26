<?php 
    require ('assets\php\conexion.php');
    session_start();
    $user = $_SESSION['usuario']['name'];
    $type = $_SESSION['usuario']['type'];
    if($type != 'E'){
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
    <script src="assets/js/employees.js"></script>
    <title>Viviendas</title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-dark bg-dark navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header" style="color:#FFF">
        <p>Hola <?php echo $user; ?></p>
        </div>        
        <ul class="nav navbar-nav navbar-right">
        <li><a href="assets/php/logout.php">Cerrar Sesión</a></li>        
        </ul>
    </div>
    </nav> 
        <div class="col-12">
            <div class="row">
                <div class="form-group col-sm-4 col-lg-2">
                    <label for="">Tipo:</label>
                    <input type="text" onkeyup="search()" class="form-control tipo" name="tipo" placeholder="Buscar por tipo..">
                </div>
                <div class="form-group col-sm-4 col-lg-2">
                    <label for="prop">Propietario:</label>
                    <input type="text" onkeyup="search1()" class="form-control prop" name="prop" placeholder="Buscar por propietario..">
                </div>
                <div class="form-group col-sm-4 col-lg-2">
                    <label for="modalidad">Modalidad:</label>
                    <input type="text" onkeyup="search2()" class="form-control modalidad"  name="modalidad" placeholder="Buscar por modalidad..">
                </div>
                <div class="form-group col-sm-4 col-lg-2">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Modificar Vivienda</button>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>#</th>
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
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">                           
                <h5 class="modal-title" id="tituloEvento">Editar Vivienda</h5>   
                </div>
                <div class="modal-body">
                    <select name="combobox" id="combobox" class="form-control" onchange="select_vivienda()">
                    <?php 
                        $sql = $mysqli -> query("SELECT * FROM viviendas");                      
                        while($result = mysqli_fetch_array($sql)){
                            echo "<option value='$result[0]'>#$result[0]--Tipo:$result[1]--País:$result[6]--Estado:$result[7]</option>";
                        }                     
                        ?>
                    </select>
                </div>
                <div id="panel_consulta" class="table-responsive">                
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="actualizarV()" class="btn btn-primary">Actualizar</button>
                    <!-- <button onclick="actualizarV()" type="button" class="btn btn-primary">Actualizar</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>          
                </div>
            </div>
        </div>
  </div>
    </div>    
</body>
</html>