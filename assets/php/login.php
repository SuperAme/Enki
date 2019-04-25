<?php
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        require 'conexion.php';
        sleep(2);
        session_start();
        $mysqli -> set_charset('utf8');
        $user = $mysqli -> real_escape_string($_POST['name']);
        $pass = $mysqli -> real_escape_string($_POST['pwd']);

        
        
        if($query = $mysqli -> prepare("SELECT * FROM user WHERE name = ? ")){

            $query -> bind_param('s',$user);
            
            $query -> execute();
            
            $resultado = $query -> get_result();        
            if($resultado -> num_rows == 1){
                $data = $resultado -> fetch_assoc();
                //$_SESSION['usuario'] = $data;
                $pass_hash = $data['pass'];
                if(password_verify($pass,$pass_hash)){
                    echo json_encode(array('error' => false, 'type' => $data['type'],'name' => $data['name']));
                }else{
                    echo json_encode(array('error' => true));
                }
                
            } else{
                echo json_encode(array('error' => true));
            }
            $query -> close();
        }
    }
    $mysqli -> close();
    

?>