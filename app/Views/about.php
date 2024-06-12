<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<!-- Body Start-->
	<div class="wrapper">
		<div class="breadcrumb-block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-10">
						<div class="barren-breadcrumb">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="event-dt-block p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						
					</div>
					<div class="col-xl-8 col-lg-7 col-md-12">
						<div class="main-event-dt">
							<div class="main-event-content">

								<h4>Tentang Kami</h4>
								
								<?= $data['konten'] ?>

							</div>							
						</div>
					</div>
					<div class="col-xl-4 col-lg-5 col-md-12">
						
					</div>
				
				</div>
			</div>
		</div>
	</div>
	<!-- Body End-->

<?= $this->endSection() ?>