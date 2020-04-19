<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Update Profil</h1>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<?= form_open_multipart('admin/update_profil'); ?>
						<div class="card-header">
							<h4>Data Diri</h4>
						</div>
						<div class="card-body">
							<?php echo $this->session->flashdata('msg'); ?>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Foto</label>
								<div class="col-sm-9">
									<!-- <input type="file" class="form-control" name="foto"> -->
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile" name="foto">
										<label class="custom-file-label" for="customFile">Pilih Foto ( 4x6, Max 2MB) </label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lengkap</label>
								<div class="col-sm-9">
									<input type="text" required class="form-control" id="inputEmail3" name="nama_lengkap" value="<?= $data->nama_lengkap ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Nama Panggilan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputEmail3" value="<?= $data->nama_panggilan ?>" name="nama_panggilan">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
								<div class="col-sm-9">
									<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
										<option value="L">Laki-Laki</option>
										<option value="P">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Tempat,Tanggal Lahir</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="inputEmail3" value="<?= $data->ttl ?>" name="tempat_lahir">
								</div>

							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Penugasan pada tim ASANTIE</label>
								<div class="col-sm-9"><input type="text" class="form-control" id="inputEmail3" value="<?= $data->penugasan_tim ?>" name="penugasan_tim">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Penugasan tempat</label>
								<div class="col-sm-9">
									<select class="form-control" id="penugasan_tempat" name="penugasan_tempat" required>
										<option value="pusat">Pusat</option>
										<option value="gdmri">GDMR I</option>
										<option value="gdmrii">GDMR II</option>
										<option value="gdmriii">GDMR III</option>
										<option value="gtm">GTM</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Jabatan</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="inputEmail3" value="<?= $data->jabatan ?>" name="jabatan">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Telepon</label>
								<div class="col-sm-9">
									<input type="number" class="form-control" id="inputEmail3" name="telepon" value="<?= $data->telepon ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" id="inputEmail3" value="<?= $data->email ?>" name="email">
								</div>
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" name="simpan" value="simpan" class="btn btn-primary">
						</div>

						<?= form_close(); ?>
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