<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<!-- Body Start -->
<div class="wrapper wrapper-body">
	<div class="dashboard-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-main-title">
						<h3><i class="fa-solid fa-gauge me-3"></i>Dashboard</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="event-list">

						<div class="tab-pane fade show active" id="all-tab" role="tabpanel">
								<div class="main-card mt-4 p-4">
									
									<div class="row">
						                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
						                        <div class="card-box tilebox-one">
						                            <i class="icon-layers float-right text-muted"></i>
						                            <h6 class="text-muted text-uppercase m-b-20">Total Event Dibuat</h6>
						                            <h2 class="m-b-20" data-plugin="counterup"><?= $total_event ?></h2>
						                        </div>
						                    </div>

						                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
						                        <div class="card-box tilebox-one">
						                            <i class="icon-paypal float-right text-muted"></i>
						                            <h6 class="text-muted text-uppercase m-b-20">Total Tiket Terjual</h6>
						                            <h2 class="m-b-20"><span data-plugin="counterup"><?= $total_tiket ?></span></h2>
						                        </div>
						                    </div>

						                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
						                        <div class="card-box tilebox-one">
						                            <i class="icon-chart float-right text-muted"></i>
						                            <h6 class="text-muted text-uppercase m-b-20">Total Terjual</h6>
						                            <h2 class="m-b-20">Rp. <span data-plugin="counterup"><?= $total_pembelian ?></span></h2>
						                        </div>
						                    </div>

						                </div>
						                <!-- end row -->

								</div>
							</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Body End -->


<?= $this->endSection() ?>