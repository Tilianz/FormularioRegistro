<?php
require_once ('conexionbd.php');
if (empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['DNI']) || empty($_POST['fecha']) || empty($_POST['correo']))
{
    echo "";
}else{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $DNI = $_POST['DNI'];
    $fecha = $_POST['fecha'];
    $correo = $_POST['correo'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $query = "INSERT INTO persona (nombre, apellido, DNI, fecha, correo, imagen) VALUES ('$nombre','$apellido','$DNI','$fecha','$correo', '$imagen')";
    $resultado = $conexionbd->query($query);

    if($resultado){
        echo "se han insertado los datos";
    }else{
        echo "no se insertaron los datos correctamente";
    }
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Formulario de Registro</title>
</head>
<body>
    <center>
        <h1>Formulario de Registro</h1>
        <form method="POST" enctype="multipart/form-data">
            <h2>Ingrese los datos correspondientes</h2>
            <input type="text" name="nombre" required="" placeholder="Nombre">
            <input type="text" name="apellido" required="" placeholder="Apellido">
            <input type="text" name="DNI" required="" placeholder="DNI">
            <input type="text" name="fecha" required="" placeholder="Fecha de Nacimiento">
            <input type="text" name="correo" required="" placeholder="Correo"><br><br>
            <label >Foto de Perfil:</label>
            <input type="file" name="imagen" required="">
            
            <center>
                <input type="submit" name= "Registrarse" value="Registrarse">
                <button><a href="consulta.php">Consultar</a></button>
            </center>
        </form>
        <?php 
            include("correo.php");
        ?>

    </center>
</body>
</html>