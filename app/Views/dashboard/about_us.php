<?= $this->extend('dashboard/layout_admin') ?>

<?= $this->section('content') ?>

<!-- Body Start -->
<div class="wrapper wrapper-body">
	<div class="dashboard-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-main-title">
						<h3><i class="fa-solid fa-calendar-days me-3"></i>Tentang Kami</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="event-list">
						<div class="tab-content">
							<div class="tab-pane fade show active" id="all-tab" role="tabpanel">
								<div class="main-card mt-4">
									<div class="">
										<div class=" p-4">

											<?php if(!empty(validation_errors())) { ?>
											<div class="alert alert-danger col-sm-12">
							        			<?= validation_list_errors() ?>
							    			</div>
							    			<?php } ?>
											
											<form method="POST" enctype="multipart/form-data">
												
												<div class="form-group mt-4">
												    <textarea id="summernote" name="konten"><?= set_value('konten', $data['konten']) ?></textarea>
												</div>
												<div class="form-group mt-4">
													<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
												</div>

											</form>

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
<!-- Body End -->



<?= $this->endSection() ?>