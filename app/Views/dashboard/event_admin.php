<?= $this->extend('dashboard/layout_admin') ?>

<?= $this->section('content') ?>

<!-- Body Start -->
<div class="wrapper wrapper-body">
	<div class="dashboard-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-main-title">
						<h3><i class="fa-solid fa-calendar-days me-3"></i>Event</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="event-list">

						<table class="table mt-4">
							<tr>
								<th>ID</th>
								<th>Gambar</th>
								<th>Nama</th>
								<th>Lokasi</th>
								<th>Deskripsi</th>
								<th>Waktu</th>
								<th>Status</th>
								<th>#Aksi</th>
							</tr>
							<?php if(empty($lists)) { ?>
								<tr>
									<td colspan="4">
										<p>Belum ada event</p>
									</td>
								</tr>
							<?php } ?>

							<?php foreach ($lists as $key => $v) : ?>
								<tr>
									<td><?= $v['event_id'] ?></td>
									<td><img src="<?= base_url('uploads/'.$v['gambar']) ?>" height="50"></td>
									<td><?= $v['nama'] ?></td>
									<td><?= $v['lokasi'] ?></td>
									<td><?= substr($v['deskripsi'], 0, 100) ?></td>
									<td><?= $v['waktu'] ?></td>
									<td><?= $v['status'] ?></td>
									<td>
										<a href="<?= base_url('event/'.$v['event_id']) ?>">view</a>
										/
										<?php if($v['status'] == 'publish') { ?>
										<a href="<?= base_url('dashboard/admin/setstatus/draft/'.$v['event_id']) ?>">take down (set to draft)</a>
										<?php } else { ?>
										<a href="<?= base_url('dashboard/admin/setstatus/publish/'.$v['event_id']) ?>">publish</a>
										<?php }?>
										/
										<a href="<?= base_url('dashboard/admin/delete/event/'.$v['event_id']) ?>">delete</a>
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