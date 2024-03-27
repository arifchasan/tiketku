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
				
				<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="main-card order-summary">
							<div class="bp-title">
								<h4>Informasi Pembayaran</h4>
							</div>
							<div class="order-summary-content p_30">
								<div class="event-order-dt">
									<div class="event-thumbnail-img">
										<img src="<?= base_url('uploads/'.$event['gambar']) ?>" alt="">
									</div>
									<div class="event-order-dt-content">
										<h5><?= $event['nama'] ?></h5>
										<span><?= date('l, j F Y H:i', strtotime($event['waktu']))?></span>
									</div>
								</div>
								<div class="order-total-block">
									<div class="order-total-dt">
										<div class="order-text">Total Tiket</div>
										<!-- <div class="order-number">1</div> -->
									</div>

									<div class="order-total-dt">
										<div class="order-text">Sub Total</div>
										<div class="order-number"></div>
									</div>

									<?php foreach ($pembelian_detail as $key => $v) : ?>

									<div class="order-total-dt">
										<div class="order-text"></div>
										<div class="order-number"><?= $v['jumlah'] ?> x Rp. <?= number_format($v['harga']) ?></div>
									</div>

									<?php endforeach; ?>

									<div class="divider-line"></div>
									<div class="order-total-dt">
										<div class="order-text">Total</div>
										<div class="order-number ttl-clr">Rp. <?= number_format($pembelian['total_harga']) ?></div>
									</div>
								</div>
								
								<div class="confirmation-btn">
									<button class="main-btn btn-hover h_50 w-100 mt-5" type="button" onclick="window.location.href='<?= $pembelian['link_pembayaran'] ?>'">Konfirmasi & Bayar</button>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Body End-->

<?= $this->endSection() ?>