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
						<div class="card-header">
							<h4>Data Diri</h4>
						</div>
						<div class="card-body">
							<div class="form-group ">
								<div class="control-label">Memiliki KTP Palembang ?</div>
								<label class="custom-switch mt-2">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
								</label>
							</div>
							<div class="form-group">
								<label>Default Input Text</label>
								<input type="text" class="form-control">
							</div>
							<div class="form-group">
								<label>Phone Number (US Format)</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fas fa-phone"></i>
										</div>
									</div>
									<input type="text" class="form-control phone-number">
								</div>
							</div>
							<div class="form-group">
								<label>Password Strength</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fas fa-lock"></i>
										</div>
									</div>
									<input type="password" class="form-control pwstrength" data-indicator="pwindicator">
								</div>
								<div id="pwindicator" class="pwindicator">
									<div class="bar"></div>
									<div class="label"></div>
								</div>
							</div>
							<div class="form-group">
								<label>Currency</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											$
										</div>
									</div>
									<input type="text" class="form-control currency">
								</div>
							</div>
							<div class="form-group">
								<label>Purchase Code</label>
								<input type="text" class="form-control purchase-code" placeholder="ASDF-GHIJ-KLMN-OPQR">
							</div>
							<div class="form-group">
								<label>Invoice</label>
								<input type="text" class="form-control invoice-input">
							</div>
							<div class="form-group">
								<label>Date</label>
								<input type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
							</div>
							<div class="form-group">
								<label>Credit Card</label>
								<input type="text" class="form-control creditcard">
							</div>
							<div class="form-group">
								<label>Tags</label>
								<div class="bootstrap-tagsinput"><input type="text" placeholder=""></div><input type="text" class="form-control inputtags" style="display: none;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>