<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu - RestoKita</title>
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
	<style>
		body {
			font-family: 'Segoe UI', sans-serif;
		}

		.header-banner {
			background-color: #f8f9fa;
			padding: 60px 0;
			text-align: center;
			border-bottom: 2px solid #dee2e6;
		}

		.header-banner h1 {
			font-size: 2.8rem;
			color: #c0392b;
			font-weight: 700;
		}

		.card {
			border: none;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
			transition: all 0.2s ease-in-out;
		}

		.card:hover {
			transform: scale(1.03);
		}

		.card-img-top {
			height: 200px;
			object-fit: cover;
			border-radius: 0.5rem 0.5rem 0 0;
		}

		.card-title {
			color: #e74c3c;
			font-weight: bold;
		}

		.card-text {
			font-size: 0.95rem;
			color: #555;
		}

		.btn-primary {
			background-color: #e67e22;
			border-color: #e67e22;
		}

		.btn-primary:hover {
			background-color: #d35400;
			border-color: #d35400;
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
					<li class="nav-item"><a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Header -->
	<div class="header-banner mt-5">
		<div class="container">
			<h1>Menu RestoKita</h1>
			<p class="lead text-muted">Silakan pilih hidangan favorit Anda!</p>
		</div>
	</div>

	<!-- Daftar Menu -->
		<div class="container my-5">
			<div class="row g-4">
				<?php foreach ($posts as $post) : ?>
					<div class="col-md-6 col-lg-4">
						<div class="card h-100">
							<?php if (!empty($post['image'])) : ?>
								<img src="<?= base_url('images/' . $post['image']) ?>" class="card-img-top" alt="<?= esc($post['title']) ?>">
							<?php else: ?>
								<img src="<?= base_url('images/default.jpg') ?>" class="card-img-top" alt="Menu">
							<?php endif; ?>
							<div class="card-body">
								<h5 class="card-title"><?= esc($post['title']) ?></h5>
								<p class="card-text">
									<?= esc(strlen(strip_tags($post['content'])) > 100 ? substr(strip_tags($post['content']), 0, 100) . '...' : strip_tags($post['content'])) ?>
								</p>
								<a href="<?= base_url('post/' . $post['slug']) ?>" class="btn btn-primary btn-sm">Lihat Detail</a>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>

		<!-- Footer -->
		<div class="container py-4">
			<footer class="pt-3 mt-4 text-muted border-top text-center">
				&copy; <?= date('Y') ?> RestoKita. Semua Hak Dilindungi.
			</footer>
		</div>

		<div class="container my-5">
		<?php if (!empty($posts)) : ?>
			<div class="row g-4">
				<?php foreach ($posts as $post) : ?>
					<div class="col-md-6 col-lg-4">
						<div class="card h-100">
							<img src="<?= base_url('images/' . ($post['image'] ?? 'default.jpg')) ?>"
								class="card-img-top"
								alt="<?= esc($post['title']) ?>">
							<div class="card-body">
								<h5 class="card-title"><?= esc($post['title']) ?></h5>
								<p class="card-text">
									<?= esc(character_limiter(strip_tags($post['content']), 100)) ?>
								</p>
								<a href="<?= base_url('post/' . $post['slug']) ?>"
								class="btn btn-primary btn-sm">Lihat Detail</a>
							</div>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		<?php else : ?>
			<div class="alert alert-info text-center">
				Belum ada menu yang tersedia saat ini.
			</div>
		<?php endif ?>
	</div>
	<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
