<?php 
    require ('..\EnkiCRUD\assets\php\conexion.php');
    session_start();
    $user = $_SESSION['usuario']['name'];
    $type = $_SESSION['usuario']['type'];
    if($type != 'C'){
        header('location: php/logout.php');
    }
?>