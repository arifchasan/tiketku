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
									Dashboard EO
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