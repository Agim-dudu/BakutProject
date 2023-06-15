<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>bs5 edit profile account details - Bootdey.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    	body{margin-top:20px;
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
    </style>
</head>
<body>
<div class="container-xl px-4 mt-4">

<nav class="nav nav-borders">
<a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
{{-- <a class="nav-link" href="" target="__blank">Billing</a>
<a class="nav-link" href="" target="__blank">Security</a>
<a class="nav-link" href="" target="__blank">Notifications</a> --}}
</nav>
<hr class="mt-0 mb-4">
<div class="row">
<div class="col-xl-4">

<div class="card mb-4 mb-xl-0">
<div class="card-header">Profile Picture</div>
<div class="card-body text-center">

<img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt>

<div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>

<button class="btn btn-primary" type="button">Upload new image</button>
</div>
</div>
</div>
<div class="col-xl-8">

<div class="card mb-4">
@if(session('success'))
<div class="alert alert-success">
 {{ session('success') }}
</div>
@endif
<div class="card-header">Account Details</div>
<div class="card-body">
    <form action="{{ route('profile.update', $users->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="small mb-1" for="inputUsername">Username</label>
            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{ $users->name }}">
        </div>
    
        <div class="row gx-3 mb-3">
            <div class="col-md-6">
                <label class="small mb-1" for="inputFirstName">Nama Depan</label>
                <input class="form-control" id="inputFirstName" type="text"  value="{{ $users->firs_name }}">
            </div>
    
            <div class="col-md-6">
                <label class="small mb-1" for="inputLastName">Nama Belakang</label>
                <input class="form-control" id="inputLastName" type="text"  value="{{ $users->last_name }}">
            </div>
        </div>
    
        <div class="row gx-3 mb-3">
            <div class="col-md-6">
                <label class="small mb-1" for="inputJenisKelamin">Jenis Kelamin</label>
                <input class="form-control" id="inputJenisKelamin" type="text"  value="{{ $users->jenis_kelamin }}">
            </div>
    
            <div class="col-md-6">
                <label class="small mb-1" for="inputLocation">Lokasi</label>
                <input class="form-control" id="inputLocation" type="text"  value="{{ $users->lokasi }}">
            </div>
        </div>
    
        <div class="mb-3">
            <label class="small mb-1" for="inputEmailAddress">Alamat Email</label>
            <input class="form-control" id="inputEmailAddress" type="email"  value="{{ $users->email }}">
        </div>
    
        <div class="row gx-3 mb-3">
            <div class="col-md-6">
                <label class="small mb-1" for="inputPhone">Nomer Telpon</label>
                <input class="form-control" id="inputPhone" type="tel"  value="{{ $users->no_telpon }}">
            </div>
    
            <div class="col-md-6">
                <label class="small mb-1" for="inputBirthday">Tanggal Lahir</label>
                <input class="form-control" id="inputBirthday" type="text" name="birthday"  value="{{ $users->tanggal_lahir }}">
            </div>
        </div>
    
        <button class="btn btn-primary" type="submit">Simpan</button>
    </form>    
</div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>