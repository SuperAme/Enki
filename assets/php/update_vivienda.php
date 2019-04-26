<?php
	require 'conexion.php';
    
    $id = $_POST['identify'];
    $tipo = $_POST['tipo'];
    $prop = $_POST['prop'];
    $input_recamaras = $_POST['input_recamaras'];
    $precio = $_POST['precio'];
    $input_modalidad = $_POST['input_modalidad'];
    $input_pais = $_POST['input_pais'];
    $input_estado = $_POST['input_estado'];

	$mysqli -> set_charset('utf8');
	$sql = "UPDATE viviendas SET tipo = '$tipo', precio = '$precio', propietario = '$prop', recamaras = '$input_recamaras' ,modalidad = '$input_modalidad' ,pais = '$input_pais' ,estado = '$input_estado'  WHERE id = '$id'";

            if (mysqli_query($mysqli, $sql)) {
                echo "insert";
            } else {
                echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $mysqli->close();
	#$data['ready'] = "ready";
	#echo json_encode($data);
?>