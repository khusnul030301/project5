<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= esc($post['title']) ?> - RestoKita</title>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
	<style>
		body {
			font-family: 'Segoe UI', sans-serif;
		}

		.card-img-top {
			height: 400px;
			object-fit: cover;
			border-radius: 0.5rem 0.5rem 0 0;
		}

		.card-title {
			color: #e74c3c;
			font-weight: bold;
			font-size: 2rem;
		}

		.btn-outline-secondary:hover {
			background-color: #e67e22;
			border-color: #e67e22;
			color: #fff;
		}
	</style>
</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">RestoKita</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">Tentang Kami</a></li>
					<li class="nav-item"><a class="nav-link active" href="<?= base_url('post') ?>">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Kontak</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Konten -->
	<div class="container mt-5 pt-5">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div class="card mb-4">
					<?php if (!empty($post['image'])) : ?>
						<img src="<?= base_url('images/' . $post['image']) ?>" class="card-img-top" alt="<?= esc($post['title']) ?>">
					<?php endif; ?>
					<div class="card-body">
						<h3 class="card-title"><?= esc($post['title']) ?></h3>
						<small class="text-muted">Diposting pada <?= date('d M Y', strtotime($post['created_at'] ?? date('Y-m-d'))) ?> oleh RestoKita</small>
						<div class="mt-3"><?= $post['content'] ?></div>
						<a href="<?= base_url('post') ?>" class="btn btn-outline-secondary mt-4">← Kembali ke daftar menu</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top text-center">
			&copy; <?= date('Y') ?> RestoKita. Semua Hak Dilindungi.
		</footer>
	</div>

	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
