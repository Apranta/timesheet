<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Welcome</h1>
		</div>
		<div class="section-body">
			<?php echo $this->session->flashdata('msg');?>
			<div class="row">
				<!-- <div class="col-12">
					<h4>Selamat Datang Di Portal Pendaftaran Bujang Gadis Palembang 2020</h4>
				</div> -->
				<div class="col-12 mb-4">
					<div class="hero bg-primary text-white">
						<div class="hero-inner">
							<h2>Welcome, <?= $this->session->userdata('username'); ?>!</h2>
							<p class="lead">Selamat Datang di Aplikasi <b>SHEILA</b></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>