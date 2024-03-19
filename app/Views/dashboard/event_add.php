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
											
											<form method="POST" enctype="multipart/form-data">
												<div class="form-group mt-4">
												    <label>Status</label>
												    <select class="form-control" name="status">
												    	<option value="draft" <?php if(set_value('status') == 'draft') { echo 'selected'; } ?>>Draft</option>
												    	<option value="publish" <?php if(set_value('status') == 'publish') { echo 'selected'; } ?>>Publish</option>
												    </select>
												</div>
												<div class="form-group mt-4">
												    <label>Nama Event</label>
												    <input type="text" class="form-control" name="nama" value="<?= set_value('nama') ?>">
												</div>
												<div class="form-group mt-4">
												    <label>Gambar Utama Event</label>
												    <input type="file" class="form-control" name="gambar">
												</div>
												<div class="form-group mt-4">
												    <label>Lokasi Event</label>
												    <input type="text" class="form-control" name="lokasi" value="<?= set_value('lokasi') ?>">
												</div>
												<div class="form-group mt-4">
												    <label>Waktu</label>
												    <input type="datetime-local" class="form-control" name="waktu" value="<?= set_value('waktu') ?>">
												</div>
												<div class="form-group mt-4">
												    <label>Deskripsi</label>
												    <textarea id="summernote" name="deskripsi"><?= set_value('deskripsi') ?></textarea>
												</div>
												<div class="form-group mt-4">
													<a href="<?= base_url('dashboard/eo/event') ?>" class="btn btn-secondary">Kembali</a>
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