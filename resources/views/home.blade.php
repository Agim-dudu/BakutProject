<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wisata Pulau Bakut</title>
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('/') }}assets/plugins/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark py-3 fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/deskripsi">Deskripsi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/tiket">Tiket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/florafauna">Flora & Fauna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/peta">Denah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/fasilitas">Fasilitas</a>
            </li>
          </ul>
          <div class="d-flex">
            <button class="btn btn-danger">Login</button>
          </div>
        </div>
      </div>
    </nav>

    <section id="hero" class="px-0">
      <div class="container text-center text-white">
        <div class="hero-tittle">
          <h1 class="hero-text">Selamat Datang <br>Di Wisata Pulau Bakut</h1>
          <h4>Taman Wisata Alam yang merupakan habitat Bekantan dengan tipe ekosistem hutan mangrove</h4>
        </div>
      </div>
    </section><br>

    <section id="program" style="margin-top: -30px">
      <div class="container">
        <div class="row g-2 g-md-3">

          <div class="col-md-2">
            <a class="nav-link active" href="/deskripsi">
            <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
              <div>
                <h5>Deskripsi</h5>
              </div>
              <img src="{{ asset('assets/icons/product-description.png') }}" height="40"
              width="40" alt="">
            </div>
            </a>
          </div>

          <div class="col-md-2">
            <a class="nav-link active" href="/tiket">
            <div class="bg-white rounded-2 shadow p-3 d-flex justify-content-between align-items-center">
              <div>
                <h5>Tiket</h5>
              </div>
              <img src="{{ asset('assets/icons/ticket.png') }}" height="40"
              width="40" alt="">
            </div>
            </a>
          </div>

          <div class="col-md-2">
            <a class="nav-link active" href="/florafauna">
            <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
              <div>
                <h5>Flora & Fauna</h5>
              </div>
              <img src="{{ asset('assets/icons/forest.png') }}" height="40"
              width="40" alt="">
            </div>
            </a>
          </div>

          <div class="col-md-2">
            <a class="nav-link active" href="/gallery">
            <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
              <div>
                <h5>Galeri</h5>
              </div>
              <img src="{{ asset('assets/icons/image-gallery.png') }}" height="40"
              width="40" alt="">
            </div>
            </a>
          </div>

          <div class="col-md-2">
            <a class="nav-link active" href="/peta">
            <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
              <div>
                <h5>Denah</h5>
              </div>
              <img src="{{ asset('assets/icons/route.png') }}" height="40"
              width="40" alt="">
            </div>
            </a>
          </div>

          <div class="col-md-2">
            <a class="nav-link active" href="/fasilitas">
            <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
              <div>
                <h5>Fasilitas</h5>
              </div>
              <img src="{{ asset('assets/icons/welfare.png') }}" height="40"
              width="40" alt="">
            </div>
          </div>
          </a>

        </div>
      </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
