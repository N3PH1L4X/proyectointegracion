<?php
    include ("/cesfam/config/config.php");

    // Initialize session
	session_start();

	// if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
	// 	header('location: ../login.php');
	// 	exit;
	// }

    if (isset($_POST['send'])){
        // $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $fabrica = $_POST['fabrica'];
        $descripcion = $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $gramaje = $_POST['gramaje'];

        $conn = mysqli_connect('localhost', 'root', '19asd19asd', 'bddcesfam');

        $insert = "INSERT INTO productos (nombreProducto,fabricaProducto,descripcionProducto,cantidadProducto,gramajeProducto)
        VALUES ('$nombre','$fabrica','$descripcion','$cantidad','$gramaje')";
    
        if (mysqli_query($conn,$insert)){
            $_SESSION['message'] = 'Registro guardado exitosamente';
            $_SESSION['message_type'] = 'success'; #Función de bootstrap
            header('Location:index.php');
        }else{
        echo "El registro no se pudo guardar". mysqli_error($conn);
        }         #Devuelve una cadena que describe el último error
    }
?>