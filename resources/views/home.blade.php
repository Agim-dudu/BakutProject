<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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
                <a class="nav-link" href="#Beranda">Beranda</a>
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
                <a class="nav-link" href="#peta">Peta</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#florafauna">Flora & Fauna</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="{{ route('login') }}">Klik login</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->


    <div class="hero" style="background-image: url('{{ asset('/') }}assets/images/home.png')">
      <div style='padding-left:80px; padding-top:400px'>
        <p style="color:azure; font-size:70px; font-weight:bold;">Selamat Datang</p>
        <p style="color:azure; font-size:50px; font-weight:bold;">Buka Setiap Hari Kecuali Jum'at</p>
        <Button style="font-weight:bold; font-size:20px; padding:9px; border-radius:10px; background-color:#259632; color:white;">Jelajahi</Button>
        <Button style="font-weight:bold; font-size:20px; padding:9px; border-radius:10px; background-color:#259632; color:white;"><a href="/order" style="color:white;">Beli Tiket</a></Button>

      </div>

    </div>
    <div class="hero1" id="fasilitas">
        <div class="contain1f">
            <h1 class="fasilitasf">Fasilitas yang Tersedia di Pulau Bakut</h1><br>
            <div class="contain2f">
            <div class="boxf">
                <a href="{{ route('fasilitas1') }}">
                <img src="{{ asset('assets/images/mosque.png') }}" alt="#" width="280px" height="280px">
                </a>
            </div>
            <div class="boxf">
                <a href="{{ route('fasilitas2') }}">
                <img src="{{ asset('assets/images/lodge.png') }}" alt="#" width="280px" height="280px">
                </a>
            </div>
            <div class="boxf">
                <a href="{{ route('fasilitas3') }}">
                <img src="{{ asset('assets/images/toilet.png') }}" alt="#" width="280px" height="280px">
            </a>
            </div>
            <div class="boxf">
                <a href="{{ route('fasilitas4') }}">
                <img src="{{ asset('assets/images/gazebo.png') }}" alt="#" width="280px" height="280px">
                </a>
            </div>
            </div>
        </div>
    </div>

    {{-- <div class="hero2" ></div> --}}

    <div class="hero2" id="peta">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15934.157270851203!2d114.54942744174642!3d-3.214869698164142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de43da58862e00f%3A0x30b1c9189a07861d!2sPulau%20Bakut!5e0!3m2!1sid!2sid!4v1684171467285!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="hero3" id="florafauna" >
      <div class="fauna-box1" style="background-color: #ffff; font-weight:bold;" >Flora & Fauna Di<br> Taman Wisata Alam <br>Pulau Bakut</div>
      <div class="fauna-box2" style="background-color: #259632">
        <div class="fauna-content1" >
          <a href="{{ route('flora') }}">
            <img src="{{ asset('assets/images/bekantann.jpg') }}" alt="#" width="200px" height="250px">
        <div class="konten">
            <h2>Flora</h2>
        <div class="fauna-content2" style="padding-top: 20px;">
          <a href="{{ route('flora') }}">
            <img src="{{ asset('assets/images/bekantann.jpg') }}" alt="#" width="200px" height="250px">
          <div class="konten">
            <h2>Flora</h2>
          </div>
            </a>
            </div>
            </div>
            </div>
        </div>
    </div>




    <script src="{{ asset('/') }}assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/') }}assets/js/popper.min.js"></script>
    <script src="{{ asset('/') }}assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}assets/js/jquery.sticky.js"></script>
    <script src="{{ asset('/') }}assets/js/main.js"></script>
  </body>
</html>
