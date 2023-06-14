<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('/') }}assets/dasboard/ha.css" />

	<title>Tapasan</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-t-shirt'></i>
			<span class="text">Pilkom Laundry</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="#">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="#transaksi">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Data Transaksi</span>
				</a>
			</li>
			<li>
				<a href="#petugas">
					<i class='bx bxs-group'></i>
					<span class="text">Data Petugas</span>
				</a>
			</li>
			<li>
				<a href="#paket">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Data Paket</span>
				</a>
			</li>
			<li>
				<a href="#akun">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Akun Manajemen</span>
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
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
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
			<a href="#" class="profile">
				<img src="">
			</a>
		</nav>
		<main>
			<div class="head-title">
				<div class="left">
					<h1 id="transaksi">Data Penjualan Laundry</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Data</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Transaksi</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="tambah-datapenju">
					<button class="btn" id="btnTambahpenju">Tambah Data</button>

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
								<th>Nama Pelanggan</th>
								<th>No Hp</th>
								<th>Paket</th>
								<th>Deskripsi</th>
								<th>Harga</th>
								<th>Jumlah</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
		</main>

	</section>
	<!-- CONTENT -->


	<script src="{{ asset('/') }}assets/dasboard/ha.js"></script>
</body>

</html>