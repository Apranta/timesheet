<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jquery-selectric/selectric.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Detail Aktivitas</h1>
		</div>
		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4>Aktivitas User</h4>
						</div>
						<div class="card-body">
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Judul</label>
								<div class="col-sm-9">
									<input type="text" readonly class="form-control" id="inputEmail3" name="judul" value="<?= $data->judul ?>">
								</div>
							</div>
							<div class="form-group row" id="delegasi">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Delegasi</label>
								<div class="col-sm-9">
									<?php
									if ($data->delegasi != 0) {
										$user = $this->User_m->get_row(["id" => $data->delegasi]);
										echo '<input type="text" readonly class="form-control" id="inputEmail3" name="judul" value="' . $user->nama_lenglap . '">';
									} else {
										echo ' <input type="text" readonly class="form-control" id="inputEmail3" name="judul" value="-">';
									}
									?>

								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Mulai Aktivitas</label>
									<input type="text" readonly class="form-control" id="inputEmail3" name="judul" value="<?= $data->mulai ?>">
								</div>
								<div class="form-group col-md-6">
									<label for="inputEmail4">Akhir Aktivitas</label>
									<input type="text" readonly class="form-control" id="inputEmail3" name="judul" value="<?= $data->akhir ?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Deskripsi Aktvitas</label>
								<div class="col-sm-9">
									<textarea name="deskripsi" class="form-control" readonly><?= $data->deksripsi ?></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Output Aktivitas</label>
								<div class="col-sm-9">
									<textarea name="deskripsi" class="form-control" readonly><?= $data->output ?></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-3 col-form-label">Lokasi</label>
								<div class="col-sm-9">
									<input type="text" readonly class="form-control" id="inputEmail3" name="judul" value="<?= $data->lokasi ?>">
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
	$(document).ready(function() {
		$("#delegasi").hide();
		$("#judul").change(function() {
			// var selectedVal = $("#myselect option:selected").text();
			var selectedVal = $("#judul option:selected").val();
			if (selectedVal == "libur") {
				$("#libur").hide();
			} else {
				$("#libur").show();
				if (selectedVal == "absen") {
					$("#delegasi").show();
				} else {
					$("#delegasi").hide();

				}
			}

		});
	});
</script>