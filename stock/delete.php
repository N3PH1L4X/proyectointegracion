<?php
    include ("../config/config.php");

    // Initialize session
	session_start();

	// if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
	// 	header('location: ../login.php');
	// 	exit;
	// }

    $conn = mysqli_connect('localhost', 'root', '19asd19asd', 'bddcesfam');

    if (isset($_GET['id'])){    
        $id = $_GET['id'];
        
        $delete = "DELETE FROM productos WHERE id = $id";

        if (mysqli_query($conn, $delete)){
            $_SESSION['message'] = 'Registro borrado exitosamente';
            $_SESSION['message_type'] = 'danger'; # Funcion de bootstrap
            header('Location:index.php'); # Redireccionar el archivo
        }else{
            echo "Error al borrar registro: " . mysqli_error($conn);
        }
    }
?>
