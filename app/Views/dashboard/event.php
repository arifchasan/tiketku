<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<!-- Body Start -->
<div class="wrapper wrapper-body">
	<div class="dashboard-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-main-title">
						<h3><i class="fa-solid fa-calendar-days me-3"></i>Events</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="event-list">
						<a href="<?= base_url('dashboard/eo/event/add') ?>" class="btn btn-primary mt-4"><i class="fa-solid fa-plus"></i> Buat Event</a>

						<?php if(empty($lists)) { ?>

						<p class="mt-4">Belum ada event yang dibuat.</p>

						<?php } ?>

						<?php foreach ($lists as $key => $v) : ?>

						<div class="tab-content">

							<div class="tab-pane fade show active" id="all-tab" role="tabpanel">
								<div class="main-card mt-4">
									<div class="contact-list">
										<div class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
											<div class="d-md-flex align-items-center event-top-info">
												<div class="card-event-img">
													<img src="<?= base_url('uploads/'.$v['gambar'])?>" alt="">
												</div>
												<div class="card-event-dt">
													<h5><?= $v['nama'] ?></h5>
												</div>
											</div>
											<div class="dropdown">
												<button class="option-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></button>
												<div class="dropdown-menu dropdown-menu-right">
													<a href="<?= base_url('dashboard/eo/event/tiket/'.$v['event_id']) ?>" class="dropdown-item"><i class="fa-solid fa-tag me-3"></i>Pengaturan Tiket</a>
													<a href="<?= base_url('dashboard/eo/event/edit/'.$v['event_id']) ?>" class="dropdown-item"><i class="fa-solid fa-pencil me-3"></i>Edit</a>
													<a href="javascript:;" onclick="alert_delete('<?= base_url('dashboard/eo/event/delete/'.$v['event_id']) ?>')"  class="dropdown-item delete-event"><i class="fa-solid fa-trash-can me-3"></i>Hapus</a>
												</div>
											</div>
										</div>
										<div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
											<div class="icon-box ">
												<span class="icon">
													<i class="fa-solid fa-location-dot"></i>
												</span>
												<p>Status</p>
												<h6 class="coupon-status"><?= $v['status'] ?></h6>
											</div>
											<div class="icon-box">
												<span class="icon">
													<i class="fa-solid fa-calendar-days"></i>
												</span>
												<p>Starts on</p>
												<h6 class="coupon-status"><?= $v['waktu'] ?></h6>
											</div>
											<div class="icon-box">
												<span class="icon">
													<i class="fa-solid fa-ticket"></i>
												</span>
												<p>Ticket</p>
												<h6 class="coupon-status">0</h6>
											</div>
											<div class="icon-box">
												<span class="icon">
													<i class="fa-solid fa-tag"></i>
												</span>
												<p>Tickets sold</p>
												<h6 class="coupon-status">0</h6>
											</div>
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
<!-- Body End -->


<?= $this->endSection() ?>