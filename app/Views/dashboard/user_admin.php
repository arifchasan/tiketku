<?= $this->extend('dashboard/layout_admin') ?>

<?= $this->section('content') ?>

<!-- Body Start -->
<div class="wrapper wrapper-body">
	<div class="dashboard-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-main-title">
						<h3><i class="fa-solid fa-users me-3"></i>User</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="event-list">

						<table class="table mt-4">
							<tr>
								<th>ID</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Telp</th>
								<th>Role</th>
								<th>Status</th>
								<th>#Aksi</th>
							</tr>
							<?php if(empty($lists)) { ?>
								<tr>
									<td colspan="4">
										<p>Belum ada user</p>
									</td>
								</tr>
							<?php } ?>

							<?php foreach ($lists as $key => $v) : ?>
								<tr>
									<td><?= $v['user_id'] ?></td>
									<td><?= $v['nama'] ?></td>
									<td><?= $v['email'] ?></td>
									<td><?= $v['telp'] ?></td>
									<td><?= $v['role'] ?></td>
									<td><?= $v['status'] ?></td>
									<td>
										<?php if($v['status'] == 'active') { ?>
										<a href="<?= base_url('dashboard/admin/setuser/banned/'.$v['user_id']) ?>">banned</a>
										<?php } else { ?>
										<a href="<?= base_url('dashboard/admin/setuser/active/'.$v['user_id']) ?>">activated</a>
										<?php }?>
										/
										<a href="<?= base_url('dashboard/admin/delete/user/'.$v['user_id']) ?>">delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Body End -->


<?= $this->endSection() ?>