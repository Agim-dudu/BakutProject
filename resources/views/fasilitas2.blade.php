<html>
<head>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href="{{ asset('/') }}assets/css/fasilitas.css" rel="stylesheet">
  <style>
  </style>
</head>
<body>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="{{ asset('assets/images/tower1.jpg') }}" alt="#" width="auto" height="100%">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('assets/images/tower2.jpg') }}" alt="#" width="auto" height="100%">
      </div>
      <div class="swiper-slide">
        <img src="{{ asset('assets/images/tower3.jpg') }}" alt="#" width="auto" height="100%">
      </div>
    </div>
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      autoplay: {
        delay: 3000,
      },
    });
  </script>
</body>
</html>
