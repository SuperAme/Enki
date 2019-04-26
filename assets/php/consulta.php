<?php 
    require 'conexion.php';
    

    if(isset($_POST['valor'])){        
        $valor = $mysqli->real_escape_string($_POST['valor']);
        $query = "SELECT * FROM viviendas WHERE tipo like '%$valor%'";
        $result = $mysqli->query($query);
        while($row=mysqli_fetch_array($result)){
            echo "<tr>".
            "<td>".$row['tipo']."</td>".
            "<td>".$row['propietario']."</td>".
            "<td>".$row['precio']."</td>".
            "<td>".$row['recamaras']."</td>".
            "<td>".$row['modalidad']."</td>".
            "<td>".$row['pais']."</td>".
            "<td>".$row['estado']."</td>".
            "</tr>";
        }
    }else if(isset($_POST['valor1'])){
        $valor = $mysqli->real_escape_string($_POST['valor1']);
        $query = "SELECT * FROM viviendas WHERE propietario like '%$valor%'";
        $result = $mysqli->query($query);
        while($row=mysqli_fetch_array($result)){
            echo "<tr>".
            "<td>".$row['tipo']."</td>".
            "<td>".$row['propietario']."</td>".
            "<td>".$row['precio']."</td>".
            "<td>".$row['recamaras']."</td>".
            "<td>".$row['modalidad']."</td>".
            "<td>".$row['pais']."</td>".
            "<td>".$row['estado']."</td>".
            "</tr>";
        }
    }else if(isset($_POST['valor2'])){
        $valor = $mysqli->real_escape_string($_POST['valor2']);
        $query = "SELECT * FROM viviendas WHERE modalidad like '%$valor%'";
        $result = $mysqli->query($query);
        while($row=mysqli_fetch_array($result)){
            echo "<tr>".
            "<td>".$row['tipo']."</td>".
            "<td>".$row['propietario']."</td>".
            "<td>".$row['precio']."</td>".
            "<td>".$row['recamaras']."</td>".
            "<td>".$row['modalidad']."</td>".
            "<td>".$row['pais']."</td>".
            "<td>".$row['estado']."</td>".
            "</tr>";
        }
    }else{
        $query = "SELECT * FROM viviendas";
        $result = $mysqli->query($query);
    
        while($row=mysqli_fetch_array($result)){
            echo "<tr>".
            "<td>".$row['tipo']."</td>".
            "<td>".$row['propietario']."</td>".
            "<td>".$row['precio']."</td>".
            "<td>".$row['recamaras']."</td>".
            "<td>".$row['modalidad']."</td>".
            "<td>".$row['pais']."</td>".
            "<td>".$row['estado']."</td>".
            "</tr>";
        }
    }
    
?>