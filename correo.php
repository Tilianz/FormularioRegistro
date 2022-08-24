<?php 

    if(isset($_POST['registrarse'])){
        if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['DNI']) && !empty($_POST['fecha']) && !empty($_POST['correo'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $DNI = $_POST['DNI'];
            $fecha = $_POST['fecha'];
            $correo = $_POST['correo'];
            $header = "De: noresponder@ejemplo.com" . "\r\n";
            $header.= "Responder a: noresponder@ejemplo.com" . "\r\n";
            $header.= "X-Mailer: PHP/" . phpversion();
            $mail= @mail($correo,$DNI,$header);
            if($mail){
                echo "<h4>Su registro fue exitoso</h4>";
            
            }
        }
    
    }


?>