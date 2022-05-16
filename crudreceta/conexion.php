<?php  
    session_start(); #Inicia una secion o reanuda una exixtente
    $servername = "localhost";   #Localhost o IP
    $username = "root";          #Usuario de la dB cga81478_pana
    $password = "19asd19asd";   #Contraseña de la dB lapandillita@
    $database = "bddcesfam";       #Nombre de la db cga81478_bddcesfam
    $port = "3306";              #puerto por el que se conecta la dB
    $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
        die("Conexion no establecida: " . mysqli_connect_error());
        }
        #mysqli_connect_error()
        #devuelve una cadena con la descripcion del ultimo error de conexión
?>