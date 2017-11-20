<?php $this->load->view('templates/header2'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top: 20px; margin-bottom: 10px;">
			
		</div>
	</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>Nim</th>
			<th>Nama</th>
			<th>Aspirasi</th>
			<th>Action</th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
			<td><?php echo $row->nim; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->pesan; ?></td>
			<td>
				
				<?php echo anchor(site_url('mahasiswa_admin/delete/'.$row->id),
				'<i class="fa fa-trash"> </i>',
				'class="btn btn-danger"'); ?>

				<?php echo anchor(site_url('Mahasiswa_admin/lihat_komentar/'.$row->nim),
				'
			</i> lihat komentar', 'class="btn btn-primary"'); ?>
			</td>

			


		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	});
</script>
