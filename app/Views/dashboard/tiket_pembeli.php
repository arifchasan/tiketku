<?= $this->extend('dashboard/layout_pembeli') ?>

<?= $this->section('content') ?>

<!-- Body Start -->
<div class="wrapper wrapper-body">
	<div class="dashboard-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-main-title">
						<h3><i class="fa-solid fa-chart-pie me-3"></i>Tiket</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="event-list">

						<div class="tab-pane fade show active" id="all-tab" role="tabpanel">
								<div class="main-card mt-4 p-4">
									Tiket Pembeli
								</div>
							</div>

						<table class="table mt-4">
							<tr>
								<th>Event</th>
								<th>Kode</th>
								<th>Tanggal Pembelian</th>
								<th>Total Harga</th>
								<th>Status</th>
							</tr>
							<?php if(empty($lists)) { ?>
								<tr>
									<td colspan="4">
										<p>Belum ada pemebelian</p>
									</td>
								</tr>
							<?php } ?>

							<?php foreach ($lists as $key => $v) : ?>
								<tr>
									<td><?= $v['nama'] ?></td>
									<td><?= $v['kode'] ?></td>
									<td><?= $v['tanggal_pembelian'] ?></td>
									<td>Rp. <?= number_format($v['total_harga']) ?></td>
									<td>
										<?php 
											switch ($v['status']) {
												case 'pending':
													$text = 'secondary';
												break;
												case 'sukses':
													$text = 'success';
												break;
												case 'gagal':
													$text = 'danger';
												break;
											}

											if($v['status']=='pending')
											{
												$pay = '<a href="'.$v['link_pembayaran'].'">bayar</a>';
											}
											else if($v['status']=='sukses')
											{
												$pay = '<a href="'.base_url('dashboard/pembeli/tiket/'.$v['kode']).'">tiket</a>';
											}
											else
											{
												$pay = '';
											}
										?>
										<div class="text-<?= $text ?>">
											<?= $v['status'] ?> <?= $pay ?>
										</div>
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