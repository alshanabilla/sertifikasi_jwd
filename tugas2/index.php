<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	 <!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-fixed-top">
        <a class="navbar-brand text-white">Perpustakaan</a>
        <div class="navbar-text dropdown ml-auto">
				<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
					<strong>Hi, Admin!</strong>
				</a>
				<ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
					<li>
						<a class="dropdown-item" href="#">Profile</a>
					</li>
					<li>
						<a class="dropdown-item" href="#">Settings</a>
					</li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li>
						<a class="dropdown-item" href="#">Sign out</a>
					</li>
				</ul>
			</div>
    </nav>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">PERPUSTAKAAN UMUM</h1>
			<p class="lead">Jl. Lembah Abang No 11, Telp: (021)55555555</p>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
              		<li class="nav-item">
                		<a class="nav-link text-dark py-2 mb-2" href="index.php?p=beranda">Beranda</a>
              		</li>
					<p class="label-navigasi bg-dark text-white">Entry Data Dan Transaksi</p>
					<li class="nav-item">
						<a class="nav-link text-dark py-2 mb-2" href="index.php?p=anggota">Data Anggota</a>
              		</li>
					<li class="nav-item">
						<a class="nav-link text-dark py-2 mb-2" href="index.php?p=buku">Data Buku</a>
              		</li>
					<li class="nav-item">
						<a class="nav-link text-dark py-2 mb-2" href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a>
              		</li>
            	</ul>
			</div>
			<div class="col-md-9">
				<?php
				$pages_dir='pages';
				if(!empty($_GET['p'])){
					$pages=scandir($pages_dir,0);
					unset($pages[0],$pages[1]);
					$p=$_GET['p'];
					if(in_array($p.'.php',$pages)){
						include($pages_dir.'/'.$p.'.php');
					}else{
						echo'Halaman Tidak Ditemukan';
					}
				}else{
					include($pages_dir.'/beranda.php');
				}
				?>
			</div>
		</div>
	</div><br>
		
		<footer class="py-4 footer-inverse bg-dark">
			<div class="container">
			<p class="m-0 text-center text-white">Sistem Informasi Perpustakaan (sipus) | Praktikum</p>
			</div>
		</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
</body>


</html>