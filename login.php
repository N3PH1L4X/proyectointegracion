<?php
  // Initialize sessions
  session_start();

  // Check if the user is already logged in, if yes then redirect him to welcome page
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: panel-usuario.php");
    exit;
  }

  // Include config file
  require_once "config/config.php";

  // Define variables and initialize with empty values
  $username = $password = '';
  $username_err = $password_err = '';

  // Process submitted form data
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if username is empty
    if(empty(trim($_POST['username']))){
      $username_err = 'Ingresa tu nombre de usuario';
    } else{
      $username = trim($_POST['username']);
    }

    // Check if password is empty
    if(empty(trim($_POST['password']))){
      $password_err = 'Ingresa tu contraseña';
    } else{
      $password = trim($_POST['password']);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
      // Prepare a select statement
      $sql = 'SELECT id, username, password FROM users WHERE username = ?';

      if ($stmt = $mysql_db->prepare($sql)) {

        // Set parmater
        $param_username = $username;

        // Bind param to statement
        $stmt->bind_param('s', $param_username);

        // Attempt to execute
        if ($stmt->execute()) {

          // Store result
          $stmt->store_result();

          // Check if username exists. Verify user exists then verify
          if ($stmt->num_rows == 1) {
            // Bind result into variables
            $stmt->bind_result($id, $username, $hashed_password);

            if ($stmt->fetch()) {
              if (password_verify($password, $hashed_password)) {

                // Start a new session
                session_start();

                // Store data in sessions
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;

                // Redirect to user to page
                header('location: panel-usuario.php');
              } else {
                // Display an error for passord mismatch
                // $password_err = 'Usuario o contraseña invalida';
                $username_err = "Usuario o contraseña invalida";
              }
            }
          } else {
            $username_err = "Usuario o contraseña invalida";
          }
        } else {
          echo "Algo salió mal, intenta de nuevo";
        }
        // Close statement
        $stmt->close();
      }

      // Close connection
      $mysql_db->close();
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Head -->
  <?php
    include_once('head.php')
  ?>
</head>

<body>

  <div class="site-wrap">


    <!-- Header -->
    <?php
      include_once('header.php')
    ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.php">Inicio</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Iniciar sesión</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Ingresa tus datos</h2>
          </div>
          <div class="col-md-12">
    
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    
              <div class="p-3 p-lg-5 border"><form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-group <?php (!empty($username_err))?'has_error':'';?>">
              <label for="username">Nombre de usuario</label>
              <input type="text" name="username" id="username" class="form-control" value="<?php echo $username ?>">
              <span class="help-block" style="color: red"><?php echo $username_err;?></span>
            </div>

            <div class="form-group <?php (!empty($password_err))?'has_error':'';?>">
              <label for="password">Contraseña</label>
              <input type="password" name="password" id="password" class="form-control" value="<?php echo $password ?>">
              <span class="help-block" style="color: red"><?php echo $password_err;?></span>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-block btn-outline-primary" value="Iniciar sesión">
            </div>
            <p>¿No tienes una cuenta? <a href="register.php">Registrate</a></p>
          </form>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>



    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Offices</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>


    <!-- Footer -->
  <?php
      include_once('footer.php')
  ?>
  </div>

  <!-- Librerias -->
  <?php
      include_once('librerias.php')
  ?>

</body>

</html>