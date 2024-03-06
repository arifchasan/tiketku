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
		<link href="<?= base_url('template'); ?>/css/responsive.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/css/night-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="<?= base_url('template'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?= base_url('template'); ?>/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">		
		
	</head>

<body>				
	<div class="form-wrapper">
		<div class="app-form">
			<div class="app-form-sidebar">
				<div class="main-logo" id="logo">
     <a class="" style="font-size: 35px; font-weight: bold; color: white;" href="<?= base_url(); ?>">TiketKu</a>
     <img class="logo-inverse" src="images/dark-logo.svg" alt="">
    </div>
				<div class="sign_sidebar_text">
					<h1>Search for the tickets you want</h1>
				</div>
			</div>
			<div class="app-form-content">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-10">
							<div class="app-top-items">
								<a href="index.html">
									<div class="sign-logo" id="logo">
										<img src="images/logo.svg" alt="">
										<img class="logo-inverse" src="images/dark-logo.svg" alt="">
									</div>
								</a>
								<div class="app-top-right-link">
									<a class="sidebar-register-link" href="<?= base_url('sign-in'); ?>"><i class="fa-regular fa-circle-left me-2"></i>Back to sign in</a>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-6 col-md-7">
							<div class="registration">
								<form method="POST">
									<h2 class="registration-title">Forgot Password</h2>

									<?php if(session()->getFlashdata('error')) { ?>
									<div class="alert alert-danger"> 
										<?= session()->getFlashdata('error') ?>
										<?= validation_list_errors() ?>
									</div>
									<?php } ?>

									<?php if(session()->getFlashdata('success')) { ?>
									<div class="alert alert-success"> 
										<?= session()->getFlashdata('success') ?>
									</div>

									<?php } ?>

									<?= csrf_field() ?>

									<div class="form-group mt-5">
										<label class="form-label">Email*</label>
										<input class="form-control h_50" type="email" placeholder="Enter your email" value="<?= $user['email'] ?>" readonly>																								
									</div>

									<div class="col-lg-12 col-md-12">	
										<div class="form-group mt-4">
											<div class="field-password">
												<label class="form-label">Kata Sandi*</label>
											</div>
											<div class="loc-group position-relative">
												<input class="form-control h_50" type="password" name="password" placeholder="<?= set_value('password') ?>">
											</div>
										</div>
									</div>

									<input type="hidden" name="email" value="<?= $user['email'] ?>">

									<button class="main-btn btn-hover w-100 mt-4" type="submit">Ganti Password</button>
								</form>
								<div class="new-sign-link">
									<a class="signup-link" href="<?= base_url('sign-in'); ?>"><i class="fa-regular fa-circle-left me-2"></i>Back to sign in</a>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
	
	<script src="<?= base_url('template'); ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('template'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('template'); ?>/vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="<?= base_url('template'); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="<?= base_url('template'); ?>/js/custom.js"></script>
	<script src="<?= base_url('template'); ?>/js/night-mode.js"></script>

</body>
</html>