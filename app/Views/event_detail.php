<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Body Start-->
	<div class="wrapper">
		<div class="breadcrumb-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-10">
						<div class="barren-breadcrumb">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="event-dt-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-top-dts">
							<div class="event-top-date">
								<span class="event-month"><?= substr($event['monthname'], 0, 3) ?></span>
								<span class="event-date"><?= $event['datename'] ?></span>
							</div>
							<div class="event-top-dt">
								<h3 class="event-main-title"><?= $event['nama'] ?></h3>
								<div class="event-top-info-status">
									<span class="event-type-name"><i class="fa-solid fa-location-dot"></i><?= $event['lokasi'] ?></span>
									<span class="event-type-name"><i class="fa-solid fa-clock"></i> <?= date('l, j F Y H:i', strtotime($event['waktu']))?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 col-lg-7 col-md-12">
						<div class="main-event-dt">
							<div class="event-img">
								<img src="<?= base_url('uploads/'.$event['gambar']) ?>" alt="">		
							</div>
							<div class="main-event-content">
								<h4><?= $event['nama'] ?></h4>
								<?= $event['deskripsi'] ?>
							</div>							
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-12">
						<div class="main-card event-right-dt">
							<div class="bp-title">
								<h4>Event Details</h4>
							</div>
							<div class="time-left">
								<div class="countdown">
									<div class="countdown-item">
										<span id="days"></span>Hari
									</div>  
									<div class="countdown-item">							
										<span id="hours"></span>Jam
									</div>
									<div class="countdown-item">
										<span id="minutes"></span>Menit
									</div> 
									<div class="countdown-item">
										<span id="seconds"></span>Detik
									</div>														
								</div>
							</div>
							<div class="event-dt-right-group mt-5">
								<div class="event-dt-right-icon">
									<i class="fa-solid fa-circle-user"></i>
								</div>
								<div class="event-dt-right-content">
									<h4>Diselenggarakan oleh</h4>
									<h5><?= $eo['nama'] ?></h5>
								</div>
							</div>
							<div class="event-dt-right-group">
								<div class="event-dt-right-icon">
									<i class="fa-solid fa-calendar-day"></i>
								</div>
								<div class="event-dt-right-content">
									<h4>Waktu dan Tanggal</h4>
									<h5><?= date('l, j F Y H:i', strtotime($event['waktu']))?></h5>
								</div>
							</div>
							<div class="event-dt-right-group">
								<div class="event-dt-right-icon">
									<i class="fa-solid fa-location-dot"></i>
								</div>
								<div class="event-dt-right-content">
									<h4>Lokasi</h4>
									<h5 class="mb-0"><?= $event['lokasi'] ?></h5>
								</div>
							</div>
							<form method="POST">

							<div class="select-tickets-block" style="zoom:0.9;">
								<h6>Pilih Tiket</h6>

								<?php foreach ($tiket as $key => $v) : ?>

								<div class="select-ticket-action mb-2">
									<div class="ticket-price"><?= $v['nama'] ?> - Rp. <?= number_format($v['harga']) ?></div>
									<div class="quantity">
										<div class="counter">
											<span class="down" onClick='decreaseCount(event, this)'>-</span>
											<input type="text" value="0" name="tiket[<?= $v['tiket_id'] ?>]">
											<span class="up" onClick='increaseCount(event, this)'>+</span>
										</div>
									</div>
								</div>

								<?php endforeach; ?>

								

							</div>
							<div class="booking-btn">
								<input type="hidden" name="event_id" value="<?= $event['event_id'] ?>">
								<button class="main-btn btn-hover w-100">Pesan Sekarang</button>
							</div>

							</form>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>
	<!-- Body End-->

	<input type="hidden" id="endTime" value="<?= $event['waktu'] ?>">

<?= $this->endSection() ?>