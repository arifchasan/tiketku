<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>TiketKu - Simple Online Event Ticketing System</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.jpeg">
		
		<!-- Stylesheets -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link href='<?= base_url('template'); ?>/vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="<?= base_url('template'); ?>/css/style.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/css/responsive.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/css/night-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="<?= base_url('template'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">	

		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

		
	</head>

<body class="d-flex flex-column h-100">
	<!-- Header Start-->
	<header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
				<div class="container">	
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
					</button>
					<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="<?= base_url(); ?>">
						<div class="res-main-logo">
							<img src="images/logo-icon.svg" alt="">
						</div>
						<div class="main-logo" id="logo">
							<a class="" style="font-size: 35px; font-weight: bold; color: green;" href="<?= base_url(); ?>">TiketKu</a>
							<img class="logo-inverse" src="images/dark-logo.svg" alt="">
						</div>
					</a>
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<div class="offcanvas-logo" id="offcanvasNavbarLabel">
								<img src="images/logo-icon.svg" alt="">
							</div>
							<button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
								<i class="fa-solid fa-xmark"></i>
							</button>
						</div>
						<div class="offcanvas-body">						
							<ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="<?= base_url('about'); ?>">
										About Us
									</a>
								</li>
        						<li class="nav-item">
        							<?php if(empty(session()->get('user'))) { ?>
									<a class="nav-link active" aria-current="page" href="<?= base_url('sign-in'); ?>">
										Sign In
									</a>
									<?php } else { ?>
									<a class="nav-link active" aria-current="page" href="<?= base_url('dashboard/'.session()->get('user')['role']) ?>">
										Dashboard (<?= session()->get('user')['nama'] ?>)
									</a>
									<?php } ?>
								</li>
							</ul>
						</div>
						<div class="offcanvas-footer">
							<div class="offcanvas-social">
								<h5>Follow Us</h5>
								<ul class="social-links">
									<li><a href="<?= base_url(); ?>#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									<li><a href="<?= base_url(); ?>#" class="social-link"><i class="fab fa-instagram"></i></a>
									<li><a href="<?= base_url(); ?>#" class="social-link"><i class="fab fa-twitter"></i></a>
									<li><a href="<?= base_url(); ?>#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
									<li><a href="<?= base_url(); ?>#" class="social-link"><i class="fab fa-youtube"></i></a>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
	</header>
	<!-- Header End-->

	<!-- Left Sidebar Start -->
	
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu">
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="<?= base_url('dashboard/eo') ?>" class="menu--link" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-gauge menu--icon"></i>
							<span class="menu--label">Dashboard</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="<?= base_url('dashboard/eo/event') ?>" class="menu--link" title="Events" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-calendar-days menu--icon"></i>
							<span class="menu--label">Events</span>
						</a>
					</li>
					<!-- <li class="menu--item">
						<a href="<?= base_url('dashboard/eo/report') ?>" class="menu--link" title="Reports" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-chart-pie menu--icon"></i>
							<span class="menu--label">Reports</span>
						</a>
					</li> -->
					<li class="menu--item">
						<a href="<?= base_url('dashboard/eo/profile') ?>" class="menu--link" title="Profil" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-user menu--icon"></i>
							<span class="menu--label">Profil</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="<?= base_url('logout') ?>" class="menu--link" title="Logout" data-bs-toggle="tooltip" data-bs-placement="right">
							<i class="fa-solid fa-power-off menu--icon"></i>
							<span class="menu--label">Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Left Sidebar End -->

	<?= $this->renderSection('content') ?>
		
	<!-- Footer Start-->
	<footer class="footer mt-auto">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Company</h4>
							<ul class="footer-link-list">
								<li><a href="about_us.html" class="footer-link">About Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Useful Links</h4>
							<ul class="footer-link-list">
								<li><a href="sell_tickets_online.html" class="footer-link">Sell Tickets Online</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Resources</h4>
							<ul class="footer-link-list">
								<li><a href="our_blog.html" class="footer-link">Blog</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="footer-content">
							<h4>Follow Us</h4>
							<ul class="social-links">
								<li><a href="<?= base_url(); ?>#" class="social-link"><i class="fab fa-facebook-square"></i></a>
								<li><a href="<?= base_url(); ?>#" class="social-link"><i class="fab fa-instagram"></i></a>
								<li><a href="<?= base_url(); ?>#" class="social-link"><i class="fab fa-twitter"></i></a>
								<li><a href="<?= base_url(); ?>#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer-copyright-text">
							<p class="mb-0">© 2024, <strong>TiketKu</strong>. All rights reserved. Created by Kelompok 2</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer End-->

	<!-- Modal Alert Delete-->
	<div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="mySmallModalLabel">Alert</h5>
	            </div>
	            <div class="modal-body p-4">
	                <p>Yakin ingin HAPUS data ini?</p>
	            </div>
	            <div class="modal-footer">
	                <a id="confirm" href="javascript:;" class="btn btn-danger">Hapus sekarang</a>
	            </div>
	        </div>
	    </div>
	</div>
	
	
	<script src="<?= base_url('template'); ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('template'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('template'); ?>/vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="<?= base_url('template'); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="<?= base_url('template'); ?>/vendor/mixitup/dist/mixitup.min.js"></script>
	<script src="<?= base_url('template'); ?>/js/custom.js"></script>
	<script src="<?= base_url('template'); ?>/js/night-mode.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>	
	<script>	
		var containerEl = document.querySelector('[data-ref~="event-filter-content"]');

            var mixer = mixitup(containerEl, {
                selectors: {
                    target: '[data-ref~="mixitup-target"]'
                }
            });
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#summernote').summernote({
				 height: 230
			});
		})

		function alert_delete(url)
	    {
	        $("#confirm").attr('href', url);
	        $("#modal-alert").modal('show');
	    }
	</script>
</body>
</html>