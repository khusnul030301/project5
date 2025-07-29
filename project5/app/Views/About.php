<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tentang Kami - RestoKita</title>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">RestoKita</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Beranda</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?= base_url('about') ?>">Tentang kami</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Kontak</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Hero Section -->
	<div class="p-5 mb-4 bg-light rounded-3 mt-5">
		<div class="container py-5">
			<h1 class="display-5 fw-bold">Tentang RestoKita</h1>
			<p class="col-md-8 fs-5">Menghidangkan Kelezatan Tradisional dengan Sentuhan Modern Sejak 2005</p>
		</div>
	</div>

	<!-- About Content -->
	<div class="container mb-5">
		<div class="row align-items-center">
			<div class="col-md-6">
				<img src="<?= base_url('images/interior.jpg') ?>" class="img-fluid rounded shadow-sm" alt="Interior Restoran">
			</div>
			<div class="col-md-6">
				<h4>Siapa Kami</h4>
				<p>RestoKita adalah restoran keluarga yang menyajikan berbagai menu nusantara dengan cita rasa otentik. Kami percaya bahwa makanan bukan hanya tentang rasa, tetapi juga tentang kenangan dan kebersamaan.</p>
				<h4>Visi Kami</h4>
				<p>Menjadi restoran pilihan utama untuk keluarga Indonesia yang menginginkan suasana hangat dan makanan berkualitas tinggi.</p>
			</div>
		</div>

		<div class="row mt-5 align-items-center">
			<div class="col-md-6 order-md-2">
				<img src="<?= base_url('images/dapurdanchef.jpg') ?>" class="img-fluid rounded shadow-sm" alt="Interior Restoran">
			</div>
			<div class="col-md-6 order-md-1">
				<h4>Apa yang Kami Tawarkan</h4>
				<p>Dari nasi goreng kampung hingga soto betawi, semua menu kami dibuat dari bahan segar dan rempah pilihan. Disiapkan langsung oleh chef berpengalaman dengan standar kebersihan dan kualitas tinggi.</p>
				<h4>Suasana & Layanan</h4>
				<p>Dengan interior yang nyaman dan pelayanan ramah, kami ingin membuat setiap kunjungan Anda menjadi pengalaman kuliner yang menyenangkan.</p>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top text-center">
			&copy; <?= date('Y') ?> RestoKita. All rights reserved.
		</footer>
	</div>

	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>
</html>
