<?php 
    // Variables que vienen por formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];
    $newsletter = $_POST['newsletter'];

    // Variables definidas por nosotros
    $asunto = "Mensaje desde la Web";
    $destino = "rominapaola.gomez86@hotmail.com"; // email al que llegarán nuestros mensajes

    // Cuerpo del email
    $contacto = "
        Nombre: $nombre <br>
        Apellido: $apellido <br>
        Email: $email <br>
        Newsletter: $newsletter <br>
        Mensaje de la Web: $mensaje <br>
    ";

    // Proceso del envío:
    $headers="MIME-Version: 1.0" . "\r\n";
    $headers.="Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers.='From: '. $email . "\r\n";
    
    mail($destino, $asunto, $contacto, $headers);
    
    // Mensaje de éxito:
    $URL="http://libros-css.epizy.com/exito.html"; // Ubicación de mi archivo html con mi mensaje de confirmación
    echo "<script>document.location.href='{$URL}';</script>";
    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
?>