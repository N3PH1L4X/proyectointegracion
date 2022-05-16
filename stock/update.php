<?php
	// Initialize session
	session_start();

	// if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
	// 	header('location: ../login.php');
	// 	exit;
	// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP MySQL CRUD</title>
    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script>
        function validarform() {
            var x = document.forms["form"]["id"].value;
            if (x == "") {
                alert("El campo de id no puede ir vacio");
                return false;
            }
        }
    </script> <!--Validación del id en el fomrulario, si esta vacio retorna un alert-->
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-dark  bg-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">PHP MySQL CRUD</a>
            </div>
        </nav>
        <?php
            include ("../config/config.php");

            $conn = mysqli_connect('localhost', 'root', '19asd19asd', 'bddcesfam'); // CAMBIAR CREDENCIALES ENTRE LOCAL Y REMOTO

            if(isset($_GET['id'])){ #Determina si una variable está definida y no es NULL / isset
                $id = $_GET['id'];

                $query = "SELECT * FROM productos WHERE id = $id";
                $result = mysqli_query($conn, $query);
                #Obtiene el número de filas de un conjunto de resultados / mysqli_num_rows
                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_array($result);
                    #Obtiene una fila de resultados como un array asociativo, numérico, o ambos
                    $id = $row['id'];
                    $nombre = $row['nombreProducto'];
                    $fabrica = $row['fabricaProducto'];
                    $descripcion = $row['descripcionProducto'];
                    $cantidad = $row['cantidadProducto'];
                    $gramaje = $row['gramajeProducto'];
                }
            }
            if(isset($_POST['update'])){
                $id = $_GET['id'];
                $nombre = $_POST['name'];
                $fabrica = $_POST['fabrica'];
                $descripcion = $_POST['descripcion'];
                $cantidad = $_POST['cantidad'];
                $gramaje = $_POST['gramaje'];

                $update = "UPDATE productos set nombreProducto = '$nombre', fabricaProducto ='$fabrica', descripcionProducto = '$descripcion', cantidadProducto = '$cantidad',  gramajeProducto = '$gramaje'    WHERE id = $id";
                mysqli_query($conn, $update);
                $_SESSION['message'] = 'Registro actualizado exitosamente';
                $_SESSION['message_type'] = 'info'; # Función de bootstrap
                header('Location:index.php');
            }
        ?>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <form name="form" action="update.php?id=<?php echo $_GET['id'];?>"
                            onsubmit="return validarform()" method="POST">
                            <div class="form-group">
                                ID <input disabled type="text" name="id" value="<?php echo $id; ?>" class="form-control"
                                    placeholder="Actualiza ID" autocomplete="off" autofocus>
                            </div>
                            <div class="form-group">
                                Nombre<input type="text" name="name" value="<?php echo $nombre; ?>" class="form-control"
                                    placeholder="Actualiza Nombre" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                fabrica<input type="text" name="fabrica" value="<?php echo $fabrica; ?>"
                                    class="form-control" placeholder="Uptate ID" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                descripcion<input type="text" name="descripcion" value="<?php echo $descripcion; ?>"
                                    class="form-control" placeholder="Uptate ID" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                cantidad<input type="text" name="cantidad" value="<?php echo $cantidad; ?>"
                                    class="form-control" placeholder="Uptate ID" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                Gramaje<input type="text" name="gramaje" value="<?php echo $gramaje; ?>"
                                    class="form-control" placeholder="Uptate ID" autocomplete="off" required>
                            </div>
                            <button class="btn btn-success btn-block" name="update">
                                Actualizar
                            </button>
                        </form>
                    </div> <!--End card-->
                </div> <!--End col-md-4-->
            </div> <!--End row-->
        </div> <!--End container -4-->
    </div><!--div class container-->
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
</body>

</html>