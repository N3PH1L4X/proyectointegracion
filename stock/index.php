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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PHP MsSQL CRUD</title>
    <!-- CDN de Bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Fontasome-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script>
        function validarform() {
            var x = document.forms["form"]["id"].value;
            if (x == "") {
                alert("El campo de id no puede ir vacio");
                return false;
            }
        }
    </script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">Stock y Productos Farmacia</a>
            </div>
        </nav>
        <div class="container p-4">
            <?php include ("../config/config.php"); // INCLUIR ARCHIVO DE BASE DE DATOS
                        if(isset($_SESSION['message'])){?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?=  $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } #Libera todas las variables de sesión ?>
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <form method="post" name="form" onsubmit="return validarform()" action="create.php">
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" placeholder="Ingresa nombre"
                                    autocomplete="off" autofocus required>
                            </div>


                            <div class="form-group">
                                <input type="text" name="fabrica" class="form-control" placeholder="Ingresa fabrica"
                                    autocomplete="off" autofocus required>
                            </div>




                            <div class="form-group">
                                <input type="text" name="descripcion" class="form-control" placeholder="Ingresa descripcion"
                                    autocomplete="off" required required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="cantidad" class="form-control" placeholder="Ingresa cantidad"
                                    autocomplete="off" required required>
                            </div>



                            <div class="form-group">
                                <input type="text" name="gramaje" class="form-control" placeholder="Ingresa gramaje"
                                    autocomplete="off" autofocus required>
                            </div>
                            <input type="submit" class="btn btn-success btn-block" name="send" value="Agregar">
                            <input type="reset" class="btn btn-secondary btn-block" value="Limpiar">
                            <a href="../logout.php" class="btn btn-block btn-danger">Cerrar sesion</a>
                            <a href="../panel-usuario.php" class="btn btn-info btn-block">Volver</a>
                            <a href="generarpdf.php" class="btn btn-block btn-warning" target=”_blank”>Generar reporte</a>
                           
                        </form>
                        <br> 
                    </div>
                </div> <!--End col-md-4-->
                <div class="col-md-8 mx-auto">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre producto </th>
                                <th>fabrica </th>
                                <th>descripcion</th>
                                <th>cantidad</th>
                                <th>gramaje </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                        $query = "SELECT * FROM productos";
                                        $result = mysqli_query($conn, $query);
                                        while($row = mysqli_fetch_array($result)){ 
                                        #Obtiene una fila de resultados como un array asociativo, numérico, o ambos
                            ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['nombreProducto'] ?></td>
                                <td><?php echo $row['fabricaProducto'] ?></td>
                                <td><?php echo $row['descripcionProducto'] ?></td>
                                <td><?php echo $row['cantidadProducto'] ?></td>
                                <td><?php echo $row['gramajeProducto'] ?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div> <!--End col-md-8-->
            </div> <!--End row-->
        </div><!--End container p-4-->
    </div><!--End container-->
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