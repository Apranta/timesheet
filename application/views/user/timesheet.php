<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Aktivitas</h1>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<?= form_open('user/timesheet'); ?>
						<div class="card-header">
							<h4>Aktivitas User</h4>
						</div>
						<div class="card-body">
							<?php echo $this->session->flashdata('msg'); ?>

							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Judul</label>
								<div class="col-sm-9">
									<select class="form-control" id="judul" name="judul" required>
										<option value="rapat">Rapat</option>
										<option value="administrasi">Administrasi</option>
										<option value="pekerjaan sesuai jobdesk">Pekerjaan Sesuai Jobdesk</option>
										<option value="libur">Libur</option>
										<option value="absen">Absen</option>
									</select>
								</div>
							</div>
							<div id="libur">
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-3 col-form-label">Delegasi</label>
									<div class="col-sm-9">
										<input type="text" id="delegasi" class="form-control" name="delegasi">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputEmail4">Mulai Aktivitas</label>
										<input type="text" class="form-control datetimepicker" name="mulai">
									</div>
									<div class="form-group col-md-6">
										<label for="inputEmail4">Akhir Aktivitas</label>
										<input type="text" class="form-control datetimepicker" name="akhir">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-3 col-form-label">Deskripsi Aktvitas</label>
									<div class="col-sm-9">
										<textarea name="deskripsi" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-3 col-form-label">Output Aktivitas</label>
									<div class="col-sm-9">
										<textarea name="output" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-3 col-form-label">Lokasi</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="lokasi">
									</div>
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
	$(document).ready(function() {
					$("#delegasi").attr("readonly" ,true);
		$("#judul").change(function() {
			// var selectedVal = $("#myselect option:selected").text();
			var selectedVal = $("#judul option:selected").val();
			if (selectedVal == "libur") {
				$("#libur").hide();
			} else {
				$("#libur").show();
				if (selectedVal == "absen") {
					$("#delegasi").attr("readonly", false);
				} else {
					$("#delegasi").attr("readonly", true);

				}
			}

		});
	});
</script>