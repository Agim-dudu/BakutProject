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
              <a class="nav-link active" aria-current="page" href="home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Deskripsi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Tiket</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Flora & Fauna</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Denah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Fasilitas</a>
            </li>            
          </ul>
          <div class="d-flex">
            <button class="btn btn-danger">Login</button>
          </div>
        </div>
      </div>
    </nav>

    <section id="ff" class="px-0">
      <div class="container text-center text-white">
        <div class="ff-tittle">
          <h1 class="ff-text">Flora & Fauna Di<br> Taman Wisata Alam Pulau Bakut</h1>
        </div>
      </div>
    </section>

    <section id="card" class="py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-md-4">
            <div class="d-flex align-items-center mb-3">
              <div class="stripe me-2"></div>
              <h5>Daftar Flora & Fauna</h5>
            </div>
            <p class="md-4">
              Kawasan TWPB memiliki indeks kekayaan jenis flora yang sangat tinggi, meskipun didominasi oleh ekosistem yang sering tergenang oleh air, misalnya Api-api (Acicennia officinalis), Kelampa (Cerbera manghas), Jeruju (Acanthus ilicifolius). Selain itu, tercatat terdapat beragam jenis fauna meskipun tidak terlalu luas untuk Taman Wisata Alam Pulau Bakut, seperti bekantan, celadi celacan, burung madu kelapa,
            </p>
          </div>
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('assets/images/floraa.jpeg') }}"alt=""  class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">Flora</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <img src="{{ asset('assets/images/bekantann.jpg') }}" alt=""  class="img-fluid">
                <div class="card-body">
                  <h5 class="card-title">Fauna</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>