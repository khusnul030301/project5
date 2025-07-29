<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RestoKita</title>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
	<style>
		.hero {
			background: url('https://source.unsplash.com/1600x600/?restaurant,food') no-repeat center center;
			background-size: cover;
			height: 500px;
			display: flex;
			align-items: center;
			justify-content: center;
			color: white;
			text-shadow: 1px 1px 5px rgba(0,0,0,0.7);
		}
		.card:hover {
			transform: scale(1.02);
			box-shadow: 0 0 15px rgba(0,0,0,0.15);
			transition: 0.3s ease;
		}
		footer {
			background-color: #f8f9fa;
			padding: 20px 0;
		}
	</style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url() ?>">RestoKita</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Beranda</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">Tentang Kami</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Menu</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Kontak</a></li>
				<li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- Hero -->
<section class="hero">
	<div class="text-center">
		<h1 class="display-4 fw-bold">Selamat Datang di RestoKita</h1>
		<p class="lead">Nikmati cita rasa terbaik dari dapur kami</p>
	</div>
</section>

<!-- Menu Section -->
<div class="container my-5">
	<h2 class="text-center mb-4">Menu Unggulan</h2>
	<div class="row">
		<?php 
		$menu = [
			['nama' => 'Nasi Goreng Spesial', 'gambar' => 'https://www.google.com/imgres?q=nasi%20goreng%20spesial&imgurl=https%3A%2F%2Fasset.kompas.com%2Fcrops%2F3xYktcut3GtTLSvS9iNgqM4e380%3D%2F0x0%3A1000x667%2F1200x800%2Fdata%2Fphoto%2F2023%2F05%2F06%2F645677f368fc1.jpg&imgrefurl=https%3A%2F%2Fwww.kompas.com%2Ffood%2Fread%2F2023%2F05%2F08%2F080200675%2Fresep-nasi-goreng-spesial-hidangan-nasi-terenak-di-dunia-versi-cnn&docid=2AC1sDXm0smLnM&tbnid=pA8ft_gHnl_c4M&vet=12ahUKEwiklIPNw-GOAxWWV2wGHQ9HABkQM3oECBsQAA..i&w=1200&h=800&hcb=2&ved=2ahUKEwiklIPNw-GOAxWWV2wGHQ9HABkQM3oECBsQAA', 'harga' => 'Rp25.000'],
			['nama' => 'Mie Ayam Bakso', 'gambar' => 'https://source.unsplash.com/300x200/?mie-ayam', 'harga' => 'Rp20.000'],
			['nama' => 'Es Teh Manis', 'gambar' => 'https://source.unsplash.com/300x200/?ice-tea', 'harga' => 'Rp5.000']
		];
		foreach ($menu as $item): ?>
		<div class="col-md-4 mb-4">
			<div class="card h-100">
				<img src="<?= $item['gambar'] ?>" class="card-img-top" alt="<?= $item['nama'] ?>">
				<div class="card-body">
					<h5 class="card-title"><?= $item['nama'] ?></h5>
					<p class="card-text"><?= $item['harga'] ?></p>
					<a href="#" class="btn btn-outline-success btn-sm">Pesan Sekarang</a>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>

<!-- Footer -->
<footer class="text-center text-muted border-top">
	<div class="container">
		<p class="mb-0">&copy; <?= date('Y') ?> RestoKita. Dibuat dengan ❤️ di CodeIgniter 4</p>
	</div>
</footer>

<!-- JS Bootstrap -->
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
