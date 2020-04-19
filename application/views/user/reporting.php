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
			<?php echo $this->session->flashdata('msg');?>
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
											<?php $i = 0; foreach($data as $row): ?>
											<td nowrap><?=$this->tanggal->convert_date($row->created_at) ?></td>
											<td nowrap>
                                                <?= ucwords($row->judul) ?>
                                            </td>
											<td nowrap>
                                                <?php
                                                    $app2 = $this->Reporting_m->get_row(['aktivitas_id' => $row->id , 'approve' => 2]);
                                                if (isset($app2)){
                                                    echo "Status :" . $app2->status;
                                                    if ($app2->status == 0){
                                                        echo "<br> Alasan : " . $app2->alasan;
                                                    }
                                                }
                                                else{
                                                    echo "Menunggu Approved";
                                                }
                                                ?>
                                            </td>
											<td nowrap>
                                                <?php
                                                    $app1 = $this->Reporting_m->get_row(['aktivitas_id' => $row->id , 'approve' => 3]);
                                                if (isset($app1)){
                                                    echo "Status :" . $app1->status;
                                                    if ($app1->status == 0){
                                                        echo "<br> Alasan : " . $app1->alasan;
                                                    }
                                                }
                                                else{
                                                    echo "Menunggu Approved";
                                                }
                                                ?>
                                            </td>
											<td nowrap>
                                                <?php
                                                    $app2 = $this->Reporting_m->get_row(['aktivitas_id' => $row->id , 'approve' => 4]);
                                                if (isset($app2)){
                                                    echo "Status :" . $app2->status;
                                                    if ($app2->status == 0){
                                                        echo "<br> Alasan : " . $app2->alasan;
                                                    }
                                                }
                                                else{
                                                    echo "Menunggu Approved";
                                                }
                                                ?>
                                            </td>
											<td nowrap>
                                                <?php
                                                    $app2 = $this->Reporting_m->get_row(['aktivitas_id' => $row->id , 'approve' => 4]);
                                                if (isset($app2)){
                                                    echo "Status :" . $app2->status;
                                                    if ($app2->status == 0){
                                                        echo "<br> Alasan : " . $app2->alasan;
                                                    }
                                                }
                                                else{
                                                    echo "Menunggu Approved";
                                                }
                                                ?>
                                            </td>
											<td>
												<a href="<?= base_url('user/detail_aktivitas/' . $row->id) ?>" class="btn btn-primary">Detail</a>
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
			function hapus(username){
				
		        swal({
			      title: 'Are you sure?',
			      text: 'Once deleted, you will not be able to recover this imaginary file!',
			      icon: 'warning',
			      buttons: true,
			      dangerMode: true,
			    })
			    .then((willDelete) => {
			      if (willDelete) {
			      	$.post('<?= base_url('admin/peserta') ?>', {delete: true, username: username})
		                .done(function(response) {
		                	swal('Poof! Your imaginary file has been deleted!', {
						        icon: 'success',
						      });
		                    location.reload();
							log.console(response)
		                });
			      
			      } else {
			      swal('Your imaginary file is safe!');
			      }
			    });
			}
	</script>