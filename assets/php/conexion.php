<?php 
    $mysqli = new mysqli('localhost','root','','bienesraices');
    $mysqli -> set_charset('utf8');
    if($mysqli -> connect_errno):
    echo "Error al conectarse a la BD".$mysqli->connect_error;
    endif;
?>