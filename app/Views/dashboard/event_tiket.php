<?= $this->extend('dashboard/layout') ?>

<?= $this->section('content') ?>

<!-- Body Start -->
<div class="wrapper wrapper-body">
	<div class="dashboard-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-main-title">
						<h3><i class="fa-solid fa-calendar-days me-3"></i>Tiket</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="event-list">
						<a href="<?= base_url('dashboard/eo/event/tiket/add/'.$id) ?>" class="btn btn-primary mt-4"><i class="fa-solid fa-plus"></i> Buat Tiket</a>
						

						<table class="table mt-4">
							<tr>
								<th>Nama</th>
								<th>Harga</th>
								<th>Total</th>
								<th width="200">#</th>
							</tr>
							<?php if(empty($lists)) { ?>
								<tr>
									<td colspan="4">
										<p>Belum ada tiket yang dibuat.</p>
									</td>
								</tr>
							<?php } ?>

							<?php foreach ($lists as $key => $v) : ?>
								<tr>
									<td><?= $v['nama'] ?></td>
									<td><?= $v['harga'] ?></td>
									<td><?= $v['total'] ?></td>
									<td>
										<a href="<?= base_url('dashboard/eo/event/tiket/'.$id.'/edit/'.$v['tiket_id']) ?>" class="btn btn-success"><i class="fa-solid fa-pencil me-3"></i>Edit</a> 

										<a href="javascript:;" onclick="alert_delete('<?= base_url('dashboard/eo/event/tiket/'.$id.'/delete/'.$v['tiket_id']) ?>')"  class="btn btn-danger delete-event"><i class="fa-solid fa-trash-can me-3"></i>Hapus</a>
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