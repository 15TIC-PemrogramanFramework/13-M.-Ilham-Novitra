<?php $this->load->view('templates/header2'); ?>
<div class="row">
	<div class="col-md-12 text-right">
		<div style="margin-top: 20px; margin-bottom: 10px;">
			<?php echo anchor(site_url('datamahasiswa_admin/tambah'),
				'<i class="fa fa-plus-circle">
			</i> Tambah Data', 'class="btn btn-primary"'); ?>
		</div>
	</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>Nim</th>
			<th>Nama</th>
			<th>Prodi</th>
			<th>Generasi</th>
			<th>Jenis Kelamin</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_amahasiswa as $key => $row) { ?>
		<tr>
			
			<td><?php echo $row->nim; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->prodi; ?></td>
			<td><?php echo $row->generasi; ?></td>
			<td><?php echo $row->jk; ?></td>
			<td>
				<?php echo $row->pass; ?></td>				
			</td>
			<td>
				<?php echo anchor(site_url('datamahasiswa_admin/edit/'.$row->nim),
				'<i class="fa fa-pencil"> </i>',
				'class="btn btn-warning"'); ?>
				<?php echo anchor(site_url('datamahasiswa_admin/delete/'.$row->nim),
				'<i class="fa fa-trash"> </i>',
				'class="btn btn-danger"'); ?>
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
