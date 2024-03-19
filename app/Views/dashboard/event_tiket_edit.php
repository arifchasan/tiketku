<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<!-- Body Start -->
<div class="wrapper wrapper-body">
	<div class="dashboard-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-main-title">
						<h3><i class="fa-solid fa-calendar-days me-3"></i><?= $label ?></h3>
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

							    			<?php if(session()->getFlashdata('success')) { ?>
											<div class="alert alert-success col-sm-12">
												<?= session()->getFlashdata('success') ?>
											</div>
											<?php } ?>
											
											<form method="POST" enctype="multipart/form-data">
												<div class="form-group mt-4">
												    <label>Nama</label>
												    <input type="text" class="form-control" name="nama" value="<?= set_value('nama', $post['nama']) ?>">
												</div>
												<div class="form-group mt-4">
												    <label>Harga</label>
												    <input type="number" class="form-control" name="harga" value="<?= set_value('harga', $post['harga']) ?>">
												</div>
												<div class="form-group mt-4">
												    <label>Total</label>
												    <input type="number" class="form-control" name="total" value="<?= set_value('total', $post['total']) ?>">
												</div>
												<div class="form-group mt-4">
													<a href="<?= base_url('dashboard/eo/event/tiket/'.$id) ?>" class="btn btn-secondary">Kembali</a>
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