<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css"> -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.css">
<script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/DataTabless/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data User</h1>
			<div class="section-header-breadcrumb">
				<a class="btn btn-primary mr-1 text-right" href="<?= base_url('admin/tambah_user') ?>">Tambah User</a>
			</div>
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
											<th nowrap>No.</th>
											<th nowrap>Nama Lengkap</th>
											<th nowrap>Jabatan</th>
											<th nowrap>Penugasan Tim</th>
											<th nowrap>Penugasan Tempat</th>
											<th nowrap>Role </th>
											<th nowrap>Aksi</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php $i = 0; foreach($data as $row): 
												if($row->id == $user->id)
													continue;	
											?>
											<td nowrap><?= ++$i ?></td>
											<td nowrap><?=$row->nama_lengkap?></td>
											<td nowrap><?=$row->jabatan?></td>
											<td nowrap><?=$row->penugasan_tim?></td>
											<td nowrap><?= strtoupper($row->penugasan_tempat) ?></td>
											<td nowrap><?=($this->Role_m->get_row(['id' => $row->role])) ? $this->Role_m->get_row(['id' => $row->role])->nama : "-"?></td>
											
											<td>
												<a href="<?= base_url('admin/detail_user/' . $row->id) ?>" class="btn btn-primary">Detail</a>
												<a href="<?= base_url('admin/reset_password/' . $row->id) ?>" class="btn btn-success">Reset Password</a>
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