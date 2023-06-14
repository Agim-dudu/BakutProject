<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/dasboard/ha.css" />

	<title>Flora & Fauna</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-t-shirt'></i>
			<span class="text">Pulau Bakut</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="{{route('index')}}">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.history') }}">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Order Tiket</span>
				</a>
			</li>
			<li class="active">
				<a href="{{ route('admin.data_florafauna.index') }}">
					<i class='bx bxs-group'></i>
					<span class="text">Flora & Fauna</span>
				</a>
			</li>
			<li >
				<a href="{{ route('admin.data_galery.index') }}">
					<i class='bx bxs-group'></i>
					<span class="text">Galery</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.data_fasilitas.index') }}">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Fasilitas</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.data_pengguna.index') }}">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Data Pengguna</span>
				</a>
			</li>
			<li>
				<a href="{{ route('admin.data_contact.index') }}">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Pesan</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog'></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout" id="logout-link">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
				
				<script>
					document.getElementById("logout-link").addEventListener("click", function(e) {
						e.preventDefault(); // Mencegah link mengarah ke URL yang sebenarnya
				
						// Mengirim permintaan POST ke rute logout
						fetch("{{ route('logout') }}", {
							method: "POST",
							headers: {
								"Content-Type": "application/json",
								"X-CSRF-TOKEN": "{{ csrf_token() }}"
							},
							body: JSON.stringify({}) // Mengirim body kosong jika diperlukan
						})
						.then(response => {
							// Logika setelah permintaan logout berhasil
							alert("Anda telah logout"); // Menampilkan pesan logout
							
							// Setelah logout berhasil, Anda dapat mengarahkan pengguna ke halaman lain jika diperlukan
							window.location.href = "/login";
						})
						.catch(error => {
							// Logika jika terjadi kesalahan saat permintaan logout
							console.error("Terjadi kesalahan:", error);
						});
					});
				</script>
			</li>
		</ul>
	</section>
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
            <a href="#" >
				@auth
				@php
					$loggedInUser = auth()->user();
				@endphp
				
				@if (!$loggedInUser->provider && $loggedInUser->avatar)
					<td><img style="width: 36px;height: 36px;object-fit: cover;border-radius: 50%;" src="{{ asset('storage/app/images/avatar/' . $loggedInUser->avatar) }}" alt="User Avatar"></td>
				@elseif ($loggedInUser->provider == 'google' && $loggedInUser->avatar)
					<td><img style="width: 36px;height: 36px;object-fit: cover;border-radius: 50%;" src="{{ $loggedInUser->avatar }}" alt="Google Image"></td>
				@else
					<td><img style="width: 36px;height: 36px;object-fit: cover;border-radius: 50%;" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="default"></td>
				@endif
				@endauth
			</a>
		</nav>
		<main>
            @if(session('success'))
            <div style="color: rgb(59, 59, 223) " class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
			<div class="head-title">
				<div class="left">
					<h1 id="transaksi">Flora & Fauna</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Data</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Flora & Fauna</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="tambah-datapenju">
					<a href="{{route('admin.data_florafauna.create')}}" class="btn">Tambah Data</a>

					<div id="myModal1" class="modal">
						<div class="modal-content">
							<span class="close">&times;</span>

							<div class="inputModal">
								<h3 id="judulModal">Tambah Data</h3>
								<form action="home_petugas/tambahpelaundry_biasa" method="post">
								<table>
									<tr>
										<td><label for="nama">Nama</label></td>
										<td><input type="text" name="nama" id="nama"></td>
									</tr>
									<tr>
										<td><label for="nomer">Nomer</label></td>
										<td><input type="text" name="nomer" id="nomer"></td>
									</tr>
									<tr>
										<td><label for="jenis_paket">jenis Paket</label></td>
										<td><input type="text" name="jenis_paket" id="jenis_paket"></td>
									</tr>
									<tr>
										<td><label for="deskripsi">Deskripsi</label></td>
										<td><input type="text" name="deskripsi" id="deskripsi"></td>
									</tr>
									<tr>
										<td><label for="jumlah">Jumlah</label></td>
										<td><input type="text" name="jumlah" id="jumlah"></td>
									</tr>
									<tr>
										<td><label for="keterangan">Keterangan</label></td>
										<td><input type="text" name="keterangan" id="keterangan"></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="button" value="Submit" name="submit" id="submit" class="btn">
									</tr>
								</table>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="order">
					<table>
						<thead>
							<tr>
								<th style="padding: 0 30px 5px 30px;">No</th>
                                <th style="padding: 0 30px 5px 30px;">Gambar</th>
                                <th style="padding: 0 30px 5px 30px;">Icon</th>
                                <th style="padding: 0 30px 5px 30px;">Judul</th>
                                <th style="padding: 0 30px 5px 30px;">Deskripsi</th>
                                <th style="padding: 0 30px 5px 30px;">Aksi</th>
							</tr>
						</thead>
						<tbody>
                        @php
                        $n= 1;
                        @endphp
                        @foreach ($florafauna as $florafaunas)
                        <tr>
                            <th style="padding: 0 30px 5px 30px;" scope="row">{{ $n }}</th>
                            <td style="padding: 0 30px 5px 30px;"><img style="width: 100px;height: 100px;object-fit: cover;border-radius: 10%;" src="{{ asset('/') }}storage/app/images/florafauna/img/{{ $florafaunas->gambar }}"></td>
                            <td style="padding: 0 30px 5px 30px;"><img style="width: 100px;height: 100px;object-fit: cover;border-radius: 10%;" src="{{ asset('/') }}storage/app/images/florafauna/icon/{{ $florafaunas->icon }}"></td>
                            <td style="padding: 0 30px 5px 30px;">{{ $florafaunas->judul }}</td>
                            <td style="padding: 0 30px 5px 30px;">{{ $florafaunas->deskripsi }}</td>
                            <td style="padding: 0 30px 5px 30px;">
                                <a href="{{route('admin.data_florafauna.edit', $florafaunas->id)}}" class="btn1">Edit</a>
                                <form action="{{ route('admin.data_florafauna.destroy', $florafaunas->id) }}', $fasilitass->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button style="margin-top:20px;" class="btn2"
                                        onclick="confirm('anda yakin ingin menghapus data ini? ')"
                                        type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $n++;
                        @endphp
                        @endforeach
						</tbody>
					</table>
				</div>
		</main>

	</section>
	<!-- CONTENT -->


	<script src="{{ asset('/') }}assets/dasboard/ha.js"></script>
</body>

</html>

