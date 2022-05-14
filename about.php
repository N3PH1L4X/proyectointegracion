<?php

  // Database credentials
	define('DB_SERVER', 'localhost:3306');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '19asd19asd');
	define('DB_NAME', 'bddcesfam');

	// Attempt to connect to MySQL database
	$mysql_db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$conn = mysqli_connect('localhost', 'root', '19asd19asd', 'bddcesfam', 3306);

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}

  $consulta1 = "SELECT * FROM markers WHERE id = 4";
  $resultado = mysqli_query($conn, $consulta1);
  $row = mysqli_fetch_assoc($resultado);
  $latitud1 = $row['lat'];
  $longitud1 = $row['lng'];
  
  $consulta2 = "SELECT * FROM markers WHERE id = 5";
  $resultado = mysqli_query($conn, $consulta2);
  $row = mysqli_fetch_assoc($resultado);
  $latitud2 = $row['lat'];
  $longitud2 = $row['lng'];

  $consulta3 = "SELECT * FROM markers WHERE id = 6";
  $resultado = mysqli_query($conn, $consulta3);
  $row = mysqli_fetch_assoc($resultado);
  $latitud3 = $row['lat'];
  $longitud3 = $row['lng'];
  
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

    <div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>About Us</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati natus iure voluptatum eveniet harum recusandae ducimus saepe.</p>ˀ
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="block-16">
              <figure>
                <img src="images/bg_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>
    
              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
    
    
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">How We Started</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo
              exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat
              asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum quas.</p>
            <p>Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem in, quibusdam
              cumque recusandae, laudantium minima repellendus.</p>
    
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span
                    class="icon-play"></span></a>
    
              </figure>
            </div>
          </div>
          <div class="col-md-5 mr-auto">
    
    
            <div class="site-section-heading pt-3 mb-4">
              <h2 class="text-black">We Are Trusted Company</h2>
            </div>
            <p class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat, dicta at laboriosam, nemo
              exercitationem itaque eveniet architecto cumque, deleniti commodi molestias repellendus quos sequi hic fugiat
              asperiores illum. Atque, in, fuga excepturi corrupti error corporis aliquam unde nostrum quas.</p>
            <p class="text-black">Accusantium dolor ratione maiores est deleniti nihil? Dignissimos est, sunt nulla illum autem in, quibusdam
              cumque recusandae, laudantium minima repellendus.</p>
    
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck text-primary"></span>
            </div>
            <div class="text">
              <h2>Free Shipping</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan
                tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2 text-primary"></span>
            </div>
            <div class="text">
              <h2>Free Returns</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan
                tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help text-primary"></span>
            </div>
            <div class="text">
              <h2>Customer Support</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan
                tincidunt fringilla.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="site-section bg-light custom-border-bottom" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            
            <!-- Aqui mapa -->

            <p>Nuestros locales</p>
            <img src="https://maps.googleapis.com/maps/api/staticmap?center=Melipilla,Chile
            &zoom=15
            &size=640x500
            &maptype=roadmap
            &markers=color:red%7Clabel:1%7C<?php echo $latitud1; ?>,<?php echo $longitud1; ?>
            &markers=color:red%7Clabel:2%7C<?php echo $latitud2; ?>,<?php echo $longitud2; ?>
            &markers=color:red%7Clabel:3%7C<?php echo $latitud3; ?>,<?php echo $longitud3; ?>
            &key=AIzaSyBXJEa7IuU4FoPgYW1nYxZlprvPm9RFul8" alt="Mapa">

            <!-- Hasta aqui mapa -->

          </div>
        </div>
        <div>
          


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