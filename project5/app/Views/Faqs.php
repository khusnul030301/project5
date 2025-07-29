<!DOCTYPE html>
<html lang="id">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FAQ - RestoKita</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
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
					<ul class="navbar-nav ms-auto">
						<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Beranda</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">Tentang Kami</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('post') ?>">Menu</a></li>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>">Kontak</a></li>
						<li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= base_url('faqs') ?>">FAQ</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Header -->
		<div class="p-5 mb-4 bg-light rounded-3 mt-5">
			<div class="container py-5">
				<h1 class="display-5 fw-bold">Pertanyaan yang Sering Diajukan (FAQ)</h1>
				<p class="fs-5">Berikut beberapa pertanyaan umum yang sering kami terima dari pelanggan kami.</p>
			</div>
		</div>

		<!-- FAQ Content -->
		<div class="container">
			<div class="accordion" id="faqAccordion">
				<div class="accordion-item mb-3">
					<h2 class="accordion-header" id="headingOne">
						<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
							Apakah RestoKita menyediakan layanan pesan antar?
						</button>
					</h2>
					<div id="collapseOne" class="accordion-collapse collapse show">
						<div class="accordion-body">
							Ya, kami menyediakan layanan pesan antar untuk area tertentu. Silakan hubungi kami untuk informasi lebih lanjut.
						</div>
					</div>
				</div>
				<div class="accordion-item mb-3">
					<h2 class="accordion-header" id="headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
							Apakah saya bisa memesan tempat untuk acara khusus?
						</button>
					</h2>
					<div id="collapseTwo" class="accordion-collapse collapse">
						<div class="accordion-body">
							Tentu! Anda bisa melakukan reservasi untuk acara ulang tahun, arisan, dan lainnya. Hubungi kami minimal 2 hari sebelumnya.
						</div>
					</div>
				</div>
				<div class="accordion-item mb-3">
					<h2 class="accordion-header" id="headingThree">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
							Apakah tersedia menu khusus untuk vegetarian?
						</button>
					</h2>
					<div id="collapseThree" class="accordion-collapse collapse">
						<div class="accordion-body">
							Ya, kami menyediakan beberapa pilihan menu vegetarian yang lezat dan sehat.
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

		<!-- Bootstrap JS -->
		<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>

	</body>
</html>
