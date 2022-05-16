<?php
    include ("conexion.php");
    if (isset($_POST['send'])){
        // $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $indicaciones = $_POST['indicaciones'];
        $medicamento = $_POST['cbx_estado'];
        

        $insert = "INSERT INTO receta (nombrepaciente,descripcion,indicaciones,medicamento)
        VALUES ('$nombre','$descripcion','$indicaciones','$medicamento')";
        
    
        if (mysqli_query($conn,$insert)){
            $_SESSION['message'] = 'Registro guardado exitosamente';
            $_SESSION['message_type'] = 'success'; #Función de bootstrap
            header('Location: index.php');
        }else{
        echo "El registro no se pudo guardar". mysqli_error($conn);
        }         #Devuelve una cadena que describe el último error
    }
?>