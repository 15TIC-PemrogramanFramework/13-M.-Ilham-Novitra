<?php $this->load->view('templates/header2'); ?>
<div class="row">
	<div class="col-md-12 text-right">

	</div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>NO</th>
	
			<th>Komentar</th>
			<th>Action</th>
	
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
			<td><?php echo $row->id_komentar; ?></td>
			<td><?php echo $row->isi; ?></td>
			<td><?php echo anchor(site_url('mahasiswa_admin/delete2/'.$row->id_komentar),
				'<i class="fa fa-trash"> </i>',
				'class="btn btn-danger"'); ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
<a href="<?php echo site_url('mahasiswa_admin') ?>" class="btn btn-default">BACK</a>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	});
</script>
