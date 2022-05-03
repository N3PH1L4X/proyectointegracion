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
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">Thank You</strong></div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">You order was successfuly completed.</p>
            <p><a href="shop.html" class="btn btn-md height-auto px-4 py-3 btn-primary">Back to store</a></p>
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