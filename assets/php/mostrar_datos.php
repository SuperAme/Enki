<?php
    require 'conexion.php';
    $id = $_POST['id'];   
    $sql = $mysqli->query("SELECT * FROM viviendas where id = $id");                   
    while($result = mysqli_fetch_array($sql)){
        
    echo "<table class='table'>
            <tr><td>#</td><td><input type='text' value='$result[0]' class='form-control' id='input_identify' readonly></td>";
    echo "<tr><td>Tipo: </td><td><input type='text' value='$result[1]' class='form-control' id='input_tipo'></td>";
    echo "<tr><td>Propietario: </td><td><input type='text' value='$result[2]' class='form-control' id='input_prop'></td>";
    echo "<tr><td>Precio: </td><td><input type='text' value='$result[3]' class='form-control' id='input_precio'></td>";
    echo "<tr><td>Recamaras: </td><td><input type='text' value='$result[4]' class='form-control' id='input_recamaras'></td>";
    echo "<tr><td>Modalidad: </td><td><input type='text' value='$result[5]' class='form-control' id='input_modalidad'></td>";
    echo "<tr><td>País: </td><td><input type='text' value='$result[6]' class='form-control' id='input_pais'></td>";
    echo "<tr><td>Estado: </td><td><input type='text' value='$result[7]' class='form-control' id='input_estado'></td>";

    }
?>