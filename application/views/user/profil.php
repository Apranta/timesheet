<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Profil User</h1>
			<div class="section-header-breadcrumb">
				<a class="btn btn-primary mr-1 text-right" href="<?= base_url('user/update_profil') ?>">Edit Profil</a>
			</div>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card profile-widget">
						<div class="profile-widget-header">
							<img alt="image" src="<?= base_url('assets/foto/' . $this->session->userdata('id_user') . '.jpg') ?>" class="thumbnail profile-widget-picture" onerror="this.src='https://placehold.it/400x600';">
							<div class="profile-widget-items">
								<div class="profile-widget-item">
									<div class="profile-widget-item-value">Data Diri</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap</label>
								<div class="col-sm-9">
									<?= $data->nama_lengkap ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Panggilan</label>
								<div class="col-sm-9">
									<?= $data->nama_panggilan ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
								<div class="col-sm-9">
									<?php if ($data->jenis_kelamin == 'L') : ?>
										Laki Laki
									<?php elseif ($data->jenis_kelamin == 'P') : ?>
										Perempuan
									<?php else : ?>
										-
									<?php endif ?>

								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Tempat,Tanggal Lahir</label>
								<div class="col-sm-9">
									<?= $data->ttl ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Penugasan pada tim ASANTIE </label>
								<div class="col-sm-9">
									<?= $data->penugasan_tim ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Penugasan tempat </label>
								<div class="col-sm-9">
									<?= $data->penugasan_tempat ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Jabatan</label>
								<div class="col-sm-9">
									<p><?= $data->jabatan ?></p>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Telepon (WA)</label>
								<div class="col-sm-9">
									<?= $data->telepon ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
								<div class="col-sm-9">
									<?= $data->email ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/cleave.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

<script>
	$(function() {
		console.log($('#customRadioInline1').val());
	});
	$('#customRadioInline1').change(function() {
		console.log($('#cek').val());
	});
</script>