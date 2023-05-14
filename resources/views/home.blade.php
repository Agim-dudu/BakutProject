<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/') }}assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">

    <title>Website Menu #8</title>
  </head>
  <body>


    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img width="100" height="100" src="{{ asset('assets/images/logo.png') }}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Recipes</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="#">Food Catering</a>
                  <a class="dropdown-item" href="#">Drink &amp; Beverages</a>
                  <a class="dropdown-item" href="#">Wedding &amp; Birthday</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">News</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    

    <div class="hero" style="background-image: url('{{ asset('/') }}assets/images/home.png')"></div>
  


    <script src="{{ asset('/') }}assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/') }}assets/js/popper.min.js"></script>
    <script src="{{ asset('/') }}assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}assets/js/jquery.sticky.js"></script>
    <script src="{{ asset('/') }}assets/js/main.js"></script>
  </body>
</html>