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
    <title>Document</title>
</head>
<body>
    
</body>
</html>