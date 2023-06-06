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
</head>

<body>
    <div class="container">
        <h1>Edit Data</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('puzzles.update', $puzzle->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul :</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $puzzle->title }}">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi :</label>
                <textarea class="form-control" id="description" name="description">{{ $puzzle->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Gambar :</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="icon">Icon :</label>
                <input type="file" class="form-control" id="icon" name="icon">
            </div>
            <button type="submit" class="btn btn-primary">Perbaharui Data</button>
        </form>
    </div>
</body>

</html>
