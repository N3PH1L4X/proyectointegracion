<?php
    include ("../config/config.php");

    $conn = mysqli_connect('localhost', 'root', '19asd19asd', 'bddcesfam', 3306);

    if (isset($_GET['id'])){    
        $id = $_GET['id'];
        
        $delete = "DELETE FROM productos WHERE idProducto = $id";

        if (mysqli_query($conn, $delete)){
            $_SESSION['message'] = 'Registro borrado exitosamente';
            $_SESSION['message_type'] = 'danger'; # Funcion de bootstrap
            header('Location:index.php'); # Redireccionar el archivo
        }else{
            echo "Error al borrar registro: " . mysqli_error($conn);
        }
    }
?>
