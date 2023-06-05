<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wisata Pulau Bakut</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/') }}assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/') }}assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets/css/fasilitas.css" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+6281258624198</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>TwaPulaubakut@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">Pulau Bakut</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="service.html" class="nav-item nav-link">Deskripsi</a>
                <a href="service.html" class="nav-item nav-link">Flora & Fauna</a>
                <a href="contact.html" class="nav-item nav-link">Galeri</a>
                <a href="contact.html" class="nav-item nav-link">Fasilitas</a>
                <a href="contact.html" class="nav-item nav-link">Denah</a>
                @can('admin')
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">My Profile</a>
                        <a href="feature.html" class="dropdown-item">Tiket</a>
                        <a href="{{ route('puzzle') }}" class="dropdown-item">Games</a>
                        <a href="{{ route('quiz.index') }}" class="dropdown-item">Quiz</a>
                    </div>
                </div>
                @endcan
            </div>
            @if(Auth::check())
                <form action="{{ route('logout') }}" method="POST" style="display: inline">
                    @csrf
                    <button type="submit" style="background-color: rgb(215, 0, 0)" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Sign in<i class="fa fa-arrow-right ms-3"></i></a>
            @endif
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('/') }}assets/img/home.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">Selamat Datang <br>Di Wisata Pulau Bakut</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('/') }}assets/img/bekantann.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">Buka Setiap Hari Kecuali Jumat</h1>
                                    <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row g-2 g-md-3">
                <div class="col-md-2">
                  <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                      <h5>Deskripsi</h5>
                    </div>
                    <img src="{{ asset('assets/icons/product-description.png') }}" height="40"
                    width="40" alt="">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="bg-white rounded-2 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                      <h5>Tiket</h5>
                    </div>
                    <img src="{{ asset('assets/icons/ticket.png') }}" height="40"
                    width="40" alt="">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center" >
                    <div>
                      <a class="flora" href="florafauna">Flora&Fauna</a>
                    </div>
                    <img src="{{ asset('assets/icons/forest.png') }}" height="40"
                    width="40" alt="">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                      <h5>Galeri</h5>
                    </div>
                    <img src="{{ asset('assets/icons/image-gallery.png') }}" height="40"
                    width="40" alt="">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                      <h5>Denah</h5>
                    </div>
                    <img src="{{ asset('assets/icons/route.png') }}" height="40"
                    width="40" alt="">
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                      <h5>Fasilitas</h5>
                    </div>
                    <img src="{{ asset('assets/icons/welfare.png') }}" height="40"
                    width="40" alt="">
                  </div>
                </div>
            </div>
        </div>
    <!-- Top Feature End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="{{ asset('assets/img/20230212_120431.jpg')}}">
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="display-1 text-primary mb-0">Ditetapkan Sejak 2012</h2>
                    <p class="text-primary mb-4">Sebagai site monitoring spesies prioritas terancam punah Bekantan di Kalimantan Selatan</p>
                    <p class="mb-4">Taman Wisata Alam (TWA) Pulau Bakut merupakan hunian bagi Bekantan (Nasalis larvatus), satwa endemik Kalimantan yang merupakan maskot atau identitas provinsi Kalimantan Selatan.</p>
                    <a class="btn btn-primary py-3 px-4" href="">Explore More</a>
                </div>
                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Jumlah Populasi Bekantan</h4>
                                <span>Terdapat sekitar 120 ekor bekantan hingga bulan April 2021.</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3">Tim Pengembang</h4>
                                <span>Mahasiswa Pendidikan Komputer FKIP ULM 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="{{ asset('/') }}assets/img/jembatan.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Happy Clients</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Garden Complated</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Dedicated Staff</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
                    <span class="fs-5 fw-semi-bold text-light">Awards Achieved</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Mengapa anda harus ke Pulau Bakut?</p>
                    <h1 class="display-5 mb-4">Beberapa alasan kenapa anda harus mengunjungi Pulau Bakut!</h1>
                    <p class="mb-4">Pemandangan yang indah, udara yang segar dan kemudahan aksesnya, menjadikan pulau Bakut yang berstatus sebagai Taman Wisata Alam menjadi pilihan destinasi wisata petualangan.<br>
                    Jalur tracking sepanjang 650 meter tersedia untuk para pengunjung yang ingin berkeliling menikmati hijaunya Pulau Bakut. Jika beruntung, wisatawan bisa menyaksikan secara langsung sekelompok bekantan duduk manis di pohon.<br>
                    Selain itu, ketika berada di Pulau Bakut, pengunjung bisa menyaksikan pemandangan alam dengan latar belakang jembatan Barito yang berdiri kokoh. Pengunjung bisa hanya jalan santai sambil menikmati udara segar dan sesekali berswafoto dengan latar belakang hutan hijau dan jembatan Barito yang membentang.</p>
                    <a class="btn btn-primary py-3 px-4" href="/order">Pesan Tiket</a>
                    
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-check fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Jalur yang mudah dilalui</h4>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-users fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Guide lokal dan petugas Resort</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <i class="fa fa-tools fa-3x text-primary"></i>
                                </div>
                                <h4 class="mb-0">Tiket masuk terjangkau</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Flora & Fauna</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{ asset('/') }}assets/img/monyetb.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{ asset('/') }}assets/img/icon/monkey.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Bekantan</h4>
                            <p class="mb-4">Bekantan (Nasalis larvatus) adalah salah satu jenis satwa primata yang ada di Indonesia.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{ asset('/') }}assets/img/bkntn.jpeg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{ asset('/') }}assets/img/icon/monkey.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Bekantan</h4>
                            <p class="mb-4">Bekantan merupakan satwa arboreal atau satwa yang hidup di pohon, namun terkadang turun ke lantai hutan untuk alasan tertentu.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{ asset('/') }}assets/img/bekantan.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{ asset('/') }}assets/img/icon/monkey.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Bekantan</h4>
                            <p class="mb-4">Bekantan juga merupakan salah satu dari sekian banyak spesies satwa endemik Indonesia yang populasinya semakin terancam.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{ asset('/') }}assets/img/flora1.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{ asset('/') }}assets/img/icon/freesia.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Flora 1</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{ asset('/') }}assets/img/flora2.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{ asset('/') }}assets/img/icon/freesia.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Flora2</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="{{ asset('/') }}assets/img/flora3.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="{{ asset('/') }}assets/img/icon/freesia.png" alt="Icon">
                            </div>
                            <h4 class="mb-3">Flora3</h4>
                            <p class="mb-4">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                            <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Galeri</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Semua</li>
                        <li class="mx-2" data-filter=".first">Jalan</li>
                        <li class="mx-2" data-filter=".second">Tanaman</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('/') }}assets/img/dsc01605.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Pintu Masuk</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('/') }}assets/img/dsc01605.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('/') }}assets/img/dsc01615.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Jalan Masuk</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('/') }}assets/img/dsc01615.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('/') }}assets/img/dsc01636.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Jembatan Masuk</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('/') }}assets/img/dsc01636.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('/') }}assets/img/dsc01879.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Cherry</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('/') }}assets/img/dsc01879.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('/') }}assets/img/dsc01605.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">?</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('/') }}assets/img/dsc01605.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="{{ asset('/') }}assets/img/dsc01881.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Kumis Kucing</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="{{ asset('/') }}assets/img/dsc01881.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->

    <div class="wadahfasilitas">
        <section class="services" id="services">
            <h1>Fasilitas</h1>
            <p class="desc">beberapa Fasilitas yang tersedia di pulau bakut yaitu mushola, toilet, menara pandang, gazebo.</p>
            <div class="services-cards">
                <div class="services-card">
                    <img src="assets/img/fasilitas/mosque2.jpg" alt="">
                    <h3>Mushola</h3>
                    <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet</p>
                    {{--  <a href="">Learn More</a>  --}}
                </div>
                <div class="services-card">
                    <img src="assets/img/fasilitas/toilet2.jpg" alt="">
                    <h3>Toilet Umum</h3>
                    <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet</p>
                    {{--  <a href="">Learn More</a>  --}}
                </div>
                <div class="services-card">
                    <img src="assets/img/fasilitas/tower2.jpg" alt="">
                    <h3>Menara Pandang</h3>
                    <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet</p>
                    {{--  <a href="">Learn More</a>  --}}
                </div>
                <div class="services-card">
                    <img src="assets/img/fasilitas/gazebo2.jpg" alt="">
                    <h3>Gazebo</h3>
                    <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet</p>
                    {{--  <a href="">Learn More</a>  --}}
                </div>
            </div>
        </section>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Tentang</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Pulau Bakut, Barito Kuala, Kalimantan Selatan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+6281258624198</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>TwaPulaubakut@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Fasilitas</h4>
                    <a class="btn btn-link" href="">Mushola</a>
                    <a class="btn btn-link" href="">WC</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Kunjungi</h4>
                    <a class="btn btn-link" href="">Tiket</a>
                    <a class="btn btn-link" href="">Deskripsi</a>
                    <a class="btn btn-link" href="">Flora & Fauna</a>
                    <a class="btn btn-link" href="">Galeri</a>
                    <a class="btn btn-link" href="">Denah</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Pesan</h4>
                    <p>Jangan lupa berkunjung ke TWA Pulau Bakut!</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Taman Wisata Alam Pulau Bakut</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By Mahasiswa ULM FKIP Pendidikan Komputer
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/wow/wow.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/easing/easing.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/waypoints/waypoints.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/counterup/counterup.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/parallax/parallax.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('/') }}assets/js/main.js"></script>
</body>

</html>