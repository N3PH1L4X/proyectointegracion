<?php
    //CORREO AL ADMINISTRADOR
    $destinatario = 'joa.lopezs@duocuc.cl';
    $destinatario2 = 'joseals0404@gmail.com';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
   
    $mensaje_completo = $mensaje . "\n Se recibio un Formulario Por parte de " . $nombre . "\n Contacto : " .$email ;
    mail($destinatario, $destinatario2, $asunto, $mensaje_completo);
    
    //CORREO AL CLIENTE
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
   
    $mensaje_completo = $mensaje . "\n Muchas Gracias por contactarse con nosotros " . $nombre ;
    mail($email, $asunto, $mensaje_completo);
    
    echo"<script>alert('Correo enviado exitosamente')</script>";
    echo"<script> setTimeout(\"location.href='index.php'\",1000) </script>";
    echo"<script> setTimeout(\"location.href='index.php'\",1000) </script>";
?>