<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css"> -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css">
<script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/DataTabless/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Aktivitas</h1>
		</div>
		<div class="section-body">
			<?php echo $this->session->flashdata('msg'); ?>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped" id="table-1">
									<thead>
										<tr>
											<th nowrap>Tanggal Aktivitas</th>
											<th nowrap>Judul</th>
											<th nowrap>Approved 1</th>
											<th nowrap>Approved 2</th>
											<th nowrap>Approved 3</th>
											<th nowrap>Approved 4</th>
											<th nowrap>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php $i = 0;
											foreach ($data as $row) : ?>
												<td nowrap><?= $this->tanggal->convert_date($row->created_at) ?></td>
												<td nowrap>
													<?= ucwords($row->judul) ?>
												</td>
												<td nowrap>
													<?php
													$app2 = $this->Reporting_m->get_row(['aktivitas_id' => $row->id, 'approve' => 1]);
													if (isset($app2)) {
														echo "Status : ";
														echo ($app2->status == 0) ? "Rejected" : "Approved";
														if ($app2->status == 0) {
															echo "<br> Alasan : " . $app2->alasan;
														}
													} else { 
														if($id_role ==2) : ?>
															<div class="btn-group mb-3" role="group" aria-label="Basic example">
																<a href="#" onclick="terima(<?= $row->id ?> , 1 ?>)" class="btn btn-icon btn-success"><i class="fas fa-check"></i></a>
																<a href="#" onclick="tolak(<?= $row->id ?>, 1)" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
															</div>
														<?php else:?>
															Menunggu Approved
														<?php endif;
													 } ?>
												</td>
												<td nowrap>
													<?php
													$app2 = $this->Reporting_m->get_row(['aktivitas_id' => $row->id, 'approve' => 2]);
													if (isset($app2)) {
														echo "Status : ";
														echo ($app2->status == 0) ? "Rejected" : "Approved";
														if ($app2->status == 0) {
															echo "<br> Alasan : " . $app2->alasan;
														}
													} else { 
														if($id_role ==3) : ?>
															<div class="btn-group mb-3" role="group" aria-label="Basic example">
																<a href="#" onclick="terima(<?= $row->id ?> , 2 ?>)" class="btn btn-icon btn-success"><i class="fas fa-check"></i></a>
																<a href="#" onclick="tolak(<?= $row->id ?>, 2)" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
															</div>
														<?php else:?>
															Menunggu Approved
														<?php endif;
													 } ?>
												</td>
												<td nowrap>
													<?php
													$app2 = $this->Reporting_m->get_row(['aktivitas_id' => $row->id, 'approve' => 3]);
													if (isset($app2)) {
														echo "Status : ";
														echo ($app2->status == 0) ? "Rejected" : "Approved";
														if ($app2->status == 0) {
															echo "<br> Alasan : " . $app2->alasan;
														}
													} else { 
														if($id_role ==4) : ?>
															<div class="btn-group mb-3" role="group" aria-label="Basic example">
																<a href="#" onclick="terima(<?= $row->id ?> , 3 ?>)" class="btn btn-icon btn-success"><i class="fas fa-check"></i></a>
																<a href="#" onclick="tolak(<?= $row->id ?>, 3)" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
															</div>
														<?php else:?>
															Menunggu Approved
														<?php endif;
													 } ?>
												</td>
												<td nowrap>
													<?php
													$app2 = $this->Reporting_m->get_row(['aktivitas_id' => $row->id, 'approve' => 4]);
													if (isset($app2)) {
														echo "Status : ";
														echo ($app2->status == 0) ? "Rejected" : "Approved";
														if ($app2->status == 0) {
															echo "<br> Alasan : " . $app2->alasan;
														}
													} else { 
														if($id_role ==5) : ?>
															<div class="btn-group mb-3" role="group" aria-label="Basic example">
																<a href="#" onclick="terima(<?= $row->id ?> , 4 ?>)" class="btn btn-icon btn-success"><i class="fas fa-check"></i></a>
																<a href="#" onclick="tolak(<?= $row->id ?>, 4)" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
															</div>
														<?php else:?>
															Menunggu Approved
														<?php endif;
													 } ?>
												</td>
												<td>
													<a href="<?= base_url('approved/detail_aktivitas/' . $row->id) ?>" class="btn btn-primary">Detail</a>
												</td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>
<script src="<?php echo base_url(); ?>assets/modules/datatables/DataTabless/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/page/modules-datatables.js"></script>
<script src="<?php echo base_url(); ?>assets/modules/sweetalert/sweetalert.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/page/modules-datatables.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script> -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#datatables').dataTable({
			"scrollX": true,
			"ordering": false,
			dom: 'Bfrtip',
			responsive: true,
			buttons: [
				'excel'
			]
		});
	});

	function terima(id, appr) {

		swal({
				title: 'Approved Reporting?',
				// text: 'Once deleted, you will not be able to recover this imaginary file!',
				type: "input",
				icon: 'success',
				buttons: true,
				dangerMode: true,
			})
			.then((willDelete) => {
				if (willDelete) {
					$.post('<?= base_url('approved/reporting') ?>', {
							approved: true,
							id: id,
							appr: appr
						})
						.done(function(response) {
							swal('Reporting Sudah Di Approved', {
								icon: 'success',
							});
							location.reload();
							log.console(response)
						});

				} else {
					swal('Batal Menerima Reporting');
				}
			});
	}

	function tolak(id , appr) {
		swal({
			title: 'Berikan Alasan Penolakan?',
			content: {
				element: 'input',
				attributes: {
					placeholder: 'berikan alasan',
					type: 'text',
				},
			},
		}).then((data) => {
			$.post('<?= base_url('approved/reporting') ?>', {
					reject: true,
					id: id,
					appr: appr,
					alasan:data
				})
				.done(function(response) {
					swal('Reporting Sudah Di Kirim', {
						icon: 'success',
					});
					location.reload();
				});

		});
	}
</script>