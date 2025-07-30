<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kontak | RestoKita</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

	<!-- Bootstrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">RestoKita</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url() ?>">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">Tentang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('post') ?>">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('contact') ?>">Kontak</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<div class="p-5 mb-4 bg-light rounded-3 mt-5">
		<div class="container py-5">
			<h1 class="display-5 fw-bold">Hubungi Kami</h1>
			<p class="fs-5">Silakan hubungi kami untuk reservasi, pemesanan, atau pertanyaan lainnya.</p>
		</div>
	</div>

	<!-- Konten -->
	<div class="container">
		<div class="row">
			<div class="col-md-6 my-3">
				<div class="card h-100">
					<div class="card-body">
						<h5 class="card-title"><i class="bi bi-geo-alt-fill me-2"></i>Alamat Kami</h5>
						<p class="card-text">Jl. Kuliner No.88, Jakarta Selatan, Indonesia</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 my-3">
				<div class="card h-100">
					<div class="card-body">
						<h5 class="card-title"><i class="bi bi-telephone-fill me-2"></i>Hubungi Kami</h5>
						<p><i class="bi bi-envelope-fill me-2"></i>Email: info@restokita.com<br>
						   <i class="bi bi-telephone-fill me-2"></i>No. Telp: 0812-3456-7890</p>
						<p><i class="bi bi-clock-fill me-2"></i>Jam Operasional: 10.00 - 22.00 WIB</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top text-center">
			&copy; <?= date('Y') ?> RestoKita
		</footer>
	</div>

	<!-- JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>
