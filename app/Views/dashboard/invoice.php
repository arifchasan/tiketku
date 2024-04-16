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

<body class="d-flex flex-column h-100">
	<!-- Invoice Start-->
	<div class="invoice clearfix">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-8 col-md-10">
					<div class="invoice-header justify-content-between">
						<div class="invoice-header-logo">
							<a class="" style="font-size: 30px; font-weight: bold; color: white;" href="<?= base_url() ?>">TiketKu</a>
						</div>
						<div class="invoice-header-text">
							<!-- <a href="invoice.html#" class="download-link">Download</a> -->
						</div>
					</div>
					<div class="invoice-body">
						<div class="invoice_dts">
							<div class="row">
								<div class="col-md-12">
									<h2 class="invoice_title">Invoice</h2>
								</div>
								<div class="col-md-6">
									<div class="vhls140">
										<ul>
											<li><div class="vdt-list">Invoice to <?= $tiket['user']['nama'] ?></div></li>
											<li><div class="vdt-list"><?= $tiket['user']['email'] ?></div></li>
											<li><div class="vdt-list"><?= $tiket['user']['telp'] ?></div></li>
											<!-- <li><div class="vdt-list">3000, Australia</div></li> -->
										</ul>
									</div>
								</div>
								<div class="col-md-6">
									<div class="vhls140">
										<ul>
											<li><div class="vdt-list">Invoice ID : <?= $tiket['kode'] ?></div></li>
											<li><div class="vdt-list">Order Date : <?= $tiket['tanggal_pembelian'] ?></div></li>
											<!-- <li><div class="vdt-list">Near MBD Mall,</div></li> -->
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="main-table bt_40">
							<div class="table-responsive">
								<table class="table">
									<!-- <thead class="thead-dark">
										<tr>
											<th scope="col">#</th>
											<th scope="col">Detail Event</th>
											<th scope="col">Tipe</th>
											<th scope="col">Qty</th>
											<th scope="col">Harga</th>
											<th scope="col">Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>										
											<td>1</td>	
											<td><a href="invoice.html#" target="_blank">Spring Showcase Saturday April 8th 2024 at 8pm</a></td>	
											<td>Online</td>	
											<td>1</td>
											<td>Rp. 1.500.000,00</td>
											<td>Rp. 1.500.000,00</td>
										</tr>
										<tr>
											<td colspan="1"></td>
											<td colspan="5">
												<div class="user_dt_trans text-end pe-xl-4">
													<div class="totalinv2">Invoice Total : Rp. 1.500.000,00</div>
													<p>Paid via Paypal</p>
												</div>
											</td>
										</tr>
									</tbody>	 -->								
								</table>
							</div>
						</div>
						<div class="invoice_footer">
							<div class="cut-line">
								<i class="fa-solid fa-scissors"></i>
							</div>
							<div class="main-card">
								<div class="row g-0">
									<div class="col-lg-7">
										<div class="event-order-dt p-4">
											<div class="event-thumbnail-img">
												<img src="<?= base_url('uploads/'.$tiket['event']['gambar']) ?>" alt="">
											</div>
											<div class="event-order-dt-content">
												<h5><?= $tiket['event']['nama'] ?></h5>
												<span><?= date('l, j F Y H:i', strtotime($tiket['event']['waktu']))?></span>
												<div class="buyer-name"><?= $tiket['user']['nama'] ?></div>
												<div class="booking-total-tickets">
													<i class="fa-solid fa-ticket rotate-icon"></i>
													<span class="booking-count-tickets mx-2">1</span>x Tiket
												</div>
												<div class="booking-total-grand">
													Total : <span>Rp. <?= number_format($tiket['total_harga']) ?></span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="QR-dt p-4">
											<ul class="QR-counter-type">
												<li>Online</li>
												<li>Tiket</li>
												<li><?= $tiket['kode'] ?></li>
											</ul>
											<div class="QR-scanner">
												<img src="<?= base_url('template'); ?>/images/qr.png" alt="QR-Ticket-Scanner">
											</div>
											<p>Created by Kelompok 2</p>
										</div>
									</div>
								</div>
							</div>
							<div class="cut-line">
								<i class="fa-solid fa-scissors"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Invoice End-->
	
	
	<script src="<?= base_url('template'); ?>/js/jquery.min.js"></script>
	<script src="<?= base_url('template'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('template'); ?>/vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="<?= base_url('template'); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="<?= base_url('template'); ?>/js/custom.js"></script>
	<script src="<?= base_url('template'); ?>/js/night-mode.js"></script>
</body>
</html>