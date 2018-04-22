<?php
    $destino = "dr.jnacianceno@gmail.com";
    $nombre = $_POST["inName"];
    $telefono =  $_POST["inPhone"];
    $mail =  $_POST["inMail"];
    $fecha =  $_POST["inDate"];
    $contenido = "Nombre del paciente " . $nombre 
                "\nTelefono: ".$telefono
                "\ncorreo: ".$mail
                "\ncFecha Consulta: ".$fecha;
    mail($destino,"Cita",$contenido);   

?>