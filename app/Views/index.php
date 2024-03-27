<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Body Start-->
<div class="wrapper">	
	<div class="explore-events p-80">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="main-title">
						<h3>Jelajahi Event</h3>
					</div>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="event-filter-items">
						<div class="featured-controls">
							<!-- <div class="filter-tag">
								<a href="explore_events_by_date.html" class="active">Semua</a>
								<a href="explore_events_by_date.html">Hari Ini</a>
								<a href="explore_events_by_date.html">Besok</a>
								<a href="explore_events_by_date.html">Minggu Ini</a>
								<a href="explore_events_by_date.html">Akhir Pekan</a>
								<a href="explore_events_by_date.html">Minggu Depan</a>
								<a href="explore_events_by_date.html">Akhir Pekan Depan</a>
								<a href="explore_events_by_date.html">Bulan Ini</a>
								<a href="explore_events_by_date.html">Bulan Depan</a>
								<a href="explore_events_by_date.html">Tahun ini</a>
								<a href="explore_events_by_date.html">Tahun Depan</a>
							</div>
							<div class="controls">
								<button type="button" class="control" data-filter="all">Semua</button>
								<button type="button" class="control" data-filter=".arts">Seni</button>
								<button type="button" class="control" data-filter=".workshops">Workshop</button>
								<button type="button" class="control" data-filter=".concert">Konser</button>
								<button type="button" class="control" data-filter=".volunteer">Volunteer</button>
								<button type="button" class="control" data-filter=".sports">Olahraga</button>
							</div> -->
							<div class="row" data-ref="event-filter-content">

								<?php foreach ($lists as $key => $v) : ?>

								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts  health_Wellness" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="<?= base_url('event/'.$v['event_id']) ?>" class="thumbnail-img">
												<img src="<?= base_url('uploads/'.$v['gambar']) ?>" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="<?= base_url('event/'.$v['event_id']) ?>" class="event-title" style="margin-bottom: -20px;"><?= $v['nama'] ?></a>
											<span><?= substr(strip_tags($v['deskripsi']), 0, 100)  ?></span>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i><?= date('l, j F Y', strtotime($v['waktu']))?></span>
												</div>
											</div>
										</div>
									</div>
								</div>

								<?php endforeach; ?>

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