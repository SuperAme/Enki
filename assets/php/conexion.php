<?php 
    $mysqli = new mysqli('localhost','root','','bienesraices');
    if($mysqli -> connect_errno):
    echo "Error al conectarse a la BD".$mysqli->connect_error;
    endif;
?>