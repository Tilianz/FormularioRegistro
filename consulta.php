<?php

include "conexionbd.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros Guardados </title>
</head>
<body>
    <center>
        <h1>Registros Guardados</h1>
        <table>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Fecha de Nacimiento</th>
            <th>Correo</th>
            <th>Foto de Perfil</th>
            </tr>
            <?php
            $query=mysqli_query($conexionbd, "SELECT *FROM persona");
            $result=mysqli_num_rows($query);
            if($result>0 ){

                while($data=mysqli_fetch_array($query)){
                
                ?>
                    <tr>
                        <td><?php echo $data['Id_persona']?></td>
                        <td><?php echo $data['nombre']?></td>
                        <td><?php echo $data['apellido']?></td>
                        <td><?php echo $data['DNI']?></td>
                        <td><?php echo $data['fecha']?></td>
                        <td><?php echo $data['correo']?></td>
                        <td><img height="65px" src="data:image/jpg;base64,<?php echo base64_encode($data['imagen'])?> "</td>
                    </tr>

                    <?php
                
                }
            
            }
            ?>
            


        </table>
        <button><a href="index.php">Regresar</a></button>
    </center>
    
</body>
</html>