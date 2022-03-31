@extends('layout.indexlayout')

@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Fanaticando - Free Business Corporate Template By MACode ID</title>

  <link rel="stylesheet" href="../css/bootstrap.css">
  
  <link rel="stylesheet" href="../css/maicons.css">

  <link rel="stylesheet" href="../vendor/animate/animate.css">

  <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="../css/theme.css">

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
          
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a href="index.html" class="navbar-brand">Fana<span class="text-primary">Ticando.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item">
          
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <h2 class="title-section mb-3">Comentanos para mejorar</h2>
         
        </div>
       
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
     <!-- Errores -->
     @foreach ($errors->all() as $error)
     <p class="alert alert-danger">{{ $error}}</p><br>
   @endforeach
   {!! csrf_field() !!}
  
    <div class="row">
      <div class="col-md-12 mb-3">
        <div class="form-group">
          <input type="text" class="form-control" name="nombreM" id="nombreM" placeholder="Nombre" required maxlength="50" minlength="4"/>
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <div class="form-group">
          <input type="text" class="form-control" name="emailM" id="emailM" placeholder="Email" required data-rule="email" maxlength="50" minlength="6"/>
        </div>
      </div>
      <div class="col-md-12 mb-3">
        <div class="form-group">
          <textarea class="form-control" name="mensajeM" rows="5" required placeholder="Mensaje" maxlength="3000" minlength="4"></textarea>
        </div>
      </div>
      <!-- Mensaje de Enviado -->
      @if (session('status')) 
      <div class="col-md-12 mb-3">
        <div class="alert alert-success">{{session('status')}}</div>
      </div>
    @endif
    <div class="col-md-12">
      <button type="submit" class="button button-a button-big button-rouded">Enviar Mensaje</button>
    </div>
  </div>
</form>
</div>
</div>


   
  </main>


  
        

  
<script src="../js/jquery-3.5.1.min.js"></script>

<script src="../js/bootstrap.bundle.min.js"></script>

<script src="../vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../vendor/wow/wow.min.js"></script>

<script src="../vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="../vendor/isotope/isotope.pkgd.min.js"></script>

<script src="../js/google-maps.js"></script>

<script src="../js/theme.js"></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
@endsection

</body>
</html>