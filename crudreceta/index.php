<?php
// Database credentials
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root'); // cga81478_pana
	define('DB_PASSWORD', '19asd19asd'); // lapandillita@
	define('DB_NAME', 'bddcesfam'); // cga81478_bddcesfam

	// Attempt to connect to MySQL database
	$mysql_db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$conn = mysqli_connect('localhost', 'root', '19asd19asd', 'bddcesfam');

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}




$query = "SELECT nombreProducto FROM productos";
$resultado=mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($resultado);

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
        
        <script  language="javascript"  src="js/jquery.min.js">   </script>
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
                <a href="index.php" class="navbar-brand">Recetas medicas</a>
            </div>
        </nav>
        <div class="container p-4">
            <?php include("conexion.php");
                        if(isset($_SESSION['message'])){?>
            <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                <?=  $_SESSION['message']?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php session_unset(); } #Libera todas las variables de sesión ?>
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="card card-body">
                         <h2>Receta Electronica</h2>
                         <br>
                        <form method="post" name="form" onsubmit="return validarform()" action="create.php">
                            <div class="form-group">
                                <label>Nombre Paciente</label>
                                <input type="text" name="nombre" class="form-control" placeholder=""
                                    autocomplete="off" autofocus>
                            </div>

                            
                            <div class="form-group">
                                 <label>Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" placeholder=""
                                    autocomplete="off" autofocus>
                            </div>




                          
                            <div class="form-group">
                                 <label>Indicaciones</label>
                                <input type="text" name="indicaciones" class="form-control" placeholder=""
                                    autocomplete="off" required>
                            </div>
                            
                            
                            
                              <div class="form-group">
                                 <label>Medicamento</label>

                                <div>selecciona :  
                        <select name="cbx_estado" id="cbx_estado"  >
     
     
                        <?php while($row=$resultado->fetch_assoc()){ ?>
                        <option  value="    <?php echo $row['nombreProducto'];  ?>  " >  <?php echo $row['nombreProducto'];  ?>  </option>   
     

                        <?php } ?>


                        </select> 
                        </div>
                            </div>
                            
                            



                           
                            <input type="submit" class="btn btn-success btn-block" name="send" value="Enviar">
                            <input type="reset" class="btn btn-secondary btn-block" value="Limpiar Datos">
                           
                        </form>
                        
                        
                        
                       
                              
                    </div>
                </div> <!--End col-md-4-->
               
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