<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<!-- Body Start -->
<div class="wrapper wrapper-body">
	<div class="dashboard-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-main-title">
						<h3><i class="fa-solid fa-chart-pie me-3"></i>Profile</h3>
					</div>
				</div>
				<div class="col-md-6">
					<div class="event-list">

						<?php if(!empty(validation_errors())) { ?>
						<div class="alert alert-danger col-sm-12">
		        			<?= validation_list_errors() ?>
		    			</div>
		    			<?php } ?>

		    			<?php if(session()->getFlashdata('error')) { ?>
						<div class="alert alert-danger"> 
							<?= session()->getFlashdata('error') ?>
							<?= validation_list_errors() ?>
						</div>
						<?php } ?>

		    			<?php if(session()->getFlashdata('success')) { ?>
						<div class="alert alert-success"> 
							<?= session()->getFlashdata('success') ?>
						</div>
						<?php } ?>

						<div class="tab-pane fade show active" id="all-tab" role="tabpanel">

							<form method="POST" enctype="multipart/form-data">
								<div class="main-card mt-4 p-4">
									
									<label class="mt-2">Nama</label>
									<input type="text" name="nama" class="form-control" value="<?= $profile['nama'] ?>">

									<label class="mt-2">Email</label>
									<input type="text" name="email" class="form-control" value="<?= $profile['email'] ?>">

									<label class="mt-2">Telp</label>
									<input type="text" name="telp" class="form-control" value="<?= $profile['telp'] ?>">
									<hr/>

									<label class="mt-2">Password Lama</label>
									<input type="password" name="password_old" class="form-control">

									<label class="mt-2">Password Baru</label>
									<input type="password" name="password_new" class="form-control">

									<input type="submit" name="submit" value="Simpan" class="btn btn-primary mt-2">

								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Body End -->


<?= $this->endSection() ?>