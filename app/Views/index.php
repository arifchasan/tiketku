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
							<div class="filter-tag">
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
							</div>
							<div class="row" data-ref="event-filter-content">
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts  health_Wellness" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="venue_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/artjogh.jpg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="venue_event_detail_view.html" class="event-title">Sosialisasi Artjog Motif Ramalan</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 200.000,00</span>
												<span class="remaining"></span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>19 Apr</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Jum, 15:45</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>2h</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix workshops" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="debated_event.html" class="thumbnail-img">
												<img src="images/event-imgs/debated.jpeg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="debated_event.html" class="event-title">National University Debating Competition (NUDC)</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp.300.000,00</span>
												<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>Tersisa 6</span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>4 Mei</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Jum, 14:00</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>2h</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix coaching_consulting free concert health_Wellness bussiness" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="venue_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/img-3.jpg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="venue_event_detail_view.html" class="event-title">Spring Showcase Saturday April 30th 2022 at 7pm</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 750.000,00</span>
												<span class="remaining"></span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>8 Mei</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Kam, 20:00</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-rotate-90 me-2"></i>Tersisa 10</span>
											</div>
										</div>
									</div>
								</div>
								<div class=" col-xl-3 col-lg-4 col-md-6 col-sm-12 mix workshops" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="online_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/beauty.jpg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="online_event_detail_view.html" class="event-title">Beauty Workshop</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 300.000,00</span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>6 Mar</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Rab, 13:00</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="venue_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/sketsa.jpeg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="venue_event_detail_view.html" class="event-title">PajangKarya KamiSketsa GalNas</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 75.000,00</span>
												<span class="remaining"></span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>13 Apr</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Sab, 12:00</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>5h</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="venue_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/teater.jpeg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="venue_event_detail_view.html" class="event-title">Pameran Seni Kontemporer Agus Suwage,</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 150.000,00</span>
												<span class="remaining"></span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>10 Mar</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Min, 16:00</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix free health_Wellness" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="online_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/img-7.jpg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="online_event_detail_view.html" class="event-title">Tutorial on Canvas Painting for Beginners</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 100.000,00</span>
												<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>Terisisa 17</span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>10 Mar</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Min, 10:00</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="venue_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/distrik.jpeg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="venue_event_detail_view.html" class="event-title">Distrik Seni x Sarinah</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 85.000,00</span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>20 Jul</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Wed, 11.30 PM</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>12h</span>
											</div>
										</div>
									</div>
								</div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix sports" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="venue_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/marathon.jpg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="venue_event_detail_view.html" class="event-title">Jakarta City Run, event olahraga April 2024</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 150.000,00</span>
												<span class="remaining"></span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>21 Apr</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Min, 07:30</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>5h</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix business volunteer" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="online_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/unicef.jpg" alt="">
											</a>
											
										</div>
										<div class="event-content">
											<a href="online_event_detail_view.html" class="event-title">Volunteers at UNICEF</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 500.000,00</span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>30 Apr</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Sab, 11:20</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>2h</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix concert" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="venue_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/maliq.jpg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="venue_event_detail_view.html" class="event-title">Maliq and The Essential - Bandung</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 50.000,00</span>
												<span class="remaining"></span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>4 Mei</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Min, 20:00</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>3h</span>
											</div>
										</div>
									</div>
								</div>
								<div class=" col-xl-3 col-lg-4 col-md-6 col-sm-12 mix sports" data-ref="mixitup-target">
									<div class="main-card mt-4">
										<div class="event-thumbnail">
											<a href="online_event_detail_view.html" class="thumbnail-img">
												<img src="images/event-imgs/f1.jpeg" alt="">
											</a>
										</div>
										<div class="event-content">
											<a href="online_event_detail_view.html" class="event-title">F1 Powerboat</a>
											<div class="duration-price-remaining">
												<span class="duration-price">Rp. 200.000,00</span>
												<span class="remaining"><i class="fa-solid fa-ticket fa-rotate-90"></i>Tersisa 7</span>
											</div>
										</div>
										<div class="event-footer">
											<div class="event-timing">
												<div class="publish-date">
													<span><i class="fa-solid fa-calendar-day me-2"></i>12 Mei</span>
													<span class="dot"><i class="fa-solid fa-circle"></i></span>
													<span>Min, 09:00</span>
												</div>
												<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>1h</span>
											</div>
										</div>
									</div>
								</div>
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