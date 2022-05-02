<?php
    //CORREO AL ADMINISTRADOR
    $destinatario = 'joa.lopezs@duocuc.cl'; //Admin 1
    $destinatario2 = 'joseals0404@gmail.com'; //Admin 2
    
    //Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
   
    //Enviar correos a administradores
    $mensaje_completo_admin = $mensaje . "\n Se recibio un Formulario Por parte de " . $nombre . "\n Correo de contacto: " .$email ;
    mail($destinatario, $asunto, $mensaje_completo_admin); //Correo a Admin 1
    mail($destinatario2, $asunto, $mensaje_completo_admin); //Correo a Admin 2
    
    //CORREO de confirmacion AL CLIENTE   
    $mensaje_completo = $mensaje . "\n Muchas Gracias por contactarse con nosotros " . $nombre ;
    mail($email, $asunto, $mensaje_completo);
    
    echo"<script>alert('Correo enviado satisfactoriamente')</script>";
    echo"<script>setTimeout(\"location.href='index.php'\",1000) </script>";
    echo"<script>setTimeout(\"location.href='index.php'\",1000) </script>";
?>