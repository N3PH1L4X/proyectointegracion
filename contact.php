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
            <strong class="text-black">Contacto</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-12">
    
          <form action="enviaremail.php" method="POST">
    
                <div class="p-3 p-lg-5 border">
                
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_fname" class="text-black">Nombre <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    
                    <div class="col-md-12">
                      <label for="c_email" class="text-black">Correo <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_subject" class="text-black">Asunto </label>
                      <input type="text" class="form-control" id="asunto" name="asunto">
                    </div>
                  </div>
      
                  <div class="form-group row">
                    <div class="col-md-12">
                      <label for="c_message" class="text-black">Mensaje </label>
                      <textarea name="mensaje" id="mensaje" cols="30" rows="7" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-12">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar mensaje</button>
                    </div>
                  </div>
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