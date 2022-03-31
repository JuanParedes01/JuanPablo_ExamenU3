<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Fanatic-Movies - Free Business Corporate Template By MACode ID</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  
  <link rel="stylesheet" href="css/maicons.css">

  <link rel="stylesheet" href="vendor/animate/animate.css">

  <link rel="stylesheet" href="vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="css/theme.css">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
        
            
          </div>
          <div class="col-md-4 text-right d-none d-md-block">
            
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item {{! Route::is('inicio') ?: 'active'}}">
              <a href="{{route('inicio')}}" class="nav-link">Inicio</a>
            </li>
            <li class="nav-item {{! Route::is('about') ?: 'active'}}">
              <a href="{{route('about')}}" class="nav-link">Personajes</a>
            </li>
            <li class="nav-item {{! Route::is('contact') ?: 'active'}}">
              <a href="{{route('contact')}}" class="nav-link">Registrarse</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

   
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
  </header>

  @yield('contenido')

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-3">
          <h3>Fana<span class="fg-primary">Ticando.</span></h3>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Gracias por apoyar este fan blog</h5>
          <p>Se les agradece los mensajes que dejen para ir mejorando</p>
          <p>Email: vagreppoucrapoi-8041@gmail.com</p>
          <p>Phone: +52 55 1038 8660</p>
        </div>
        
        </div>
       
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          
        </div>
        
        </div>
      </div>
    </div>
  </footer>

  
<script src="js/jquery-3.5.1.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>

<script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="vendor/wow/wow.min.js"></script>

<script src="vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="vendor/isotope/isotope.pkgd.min.js"></script>

<script src="js/google-maps.js"></script>

<script src="js/theme.js"></script>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

</body>
</html>