<head>
	<title>Amparo – Cuidando de quem não pode pedir ajuda</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="/../public/css/animate.css">
	<link rel="stylesheet" href="/../public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/../public/css/bootstrap.css">

	<link rel="stylesheet" href="/../public/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/../public/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="/../public/css/magnific-popup.css">

	<link rel="stylesheet" href="/../public/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="/../public/css/jquery.timepicker.css">
	<link rel="stylesheet" href="/../public/css/flaticon.css">
	<link rel="stylesheet" href="/../public/css/style.css ">
	<link rel="stylesheet" href="/../public/css/style.css">
</head>

<body>

	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center">
					<p class="mb-0 phone pl-md-2">
					</p>
				</div>
				<div class="col-md-6 d-flex justify-content-md-end">
					<div class="social-media">
						<p class="mb-0 d-flex"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<img src="./public/images/logoamparo2.png" alt="Logo Amparo" class="rounded-circle" style="width: 80px; height: 80px; margin-right: 10px;">
			<a class="navbar-brand" href="index.php?page=home"><span class="flaticon-pawprint-1 mr-2"></span>Amparo </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<?php
				// Define a página atual (ou "home" como padrão)
				$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
				?>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?php echo ($currentPage == 'home') ? 'active' : ''; ?>">
						<a href="index.php?page=home" class="nav-link">INÍCIO</a>
					</li>
					<div class="nav-item dropdown">
						<a href="index.php?page=about" class="nav-link dropdown-toggle" id="igrejaDropdown" data-bs-toggle="dropdown">SOBRE</a>
						<div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
							<a href="index.php?page=transparency" class="dropdown-item">TRANSPARÊNCIA</a>
							<a href="index.php?page=donation" class="dropdown-item">DOAÇÕES</a>
							<a href="index.php?page=adoption" class="dropdown-item">ADOTE</a>
							<a href="index.php?page=staytuned" class="dropdown-item">FIQUE ATENTO</a>
						</div>
					</div>
					<li class="nav-item <?php echo ($currentPage == 'gallery') ? 'active' : ''; ?>">
						<a href="index.php?page=available" class="nav-link">DISPONÍVEIS</a>
					</li>
					<li class="nav-item <?php echo ($currentPage == 'blog') ? 'active' : ''; ?>">
						<a href="index.php?page=blog" class="nav-link">BLOG</a>
					</li>
					<li class="nav-item <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">
						<a href="index.php?page=contact" class="nav-link">CONTATO</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<script src="../public/js/jquery.min.js"></script>
	<script src="../public/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="../public/js/popper.min.js"></script>
	<script src="../public/js/bootstrap.min.js"></script>
	<script src="../public/js/jquery.easing.1.3.js"></script>
	<script src="../public/js/jquery.waypoints.min.js"></script>
	<script src="../public/js/jquery.stellar.min.js"></script>
	<script src="../public/js/jquery.animateNumber.min.js"></script>
	<script src="../public/js/bootstrap-datepicker.js"></script>
	<script src="../public/js/jquery.timepicker.min.js"></script>
	<script src="../public/js/owl.carousel.min.js"></script>
	<script src="../public/js/jquery.magnific-popup.min.js"></script>
	<script src="../public/js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="../public/js/google-map.js"></script>
	<script src="../public/js/main.js"></script>
	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script src="../public/js/bootstrap.bundle.min.js"></script>