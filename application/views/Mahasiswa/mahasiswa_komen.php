<?php $this->load->view('templates/header'); ?>
<div class="row">
	
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			
			<th>NO</th>
	
			<th>Komentar</th>
			
	
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
			<td><?php echo $row->id_komentar; ?></td>
			<td><?php echo $row->isi; ?></td>
		</tr>
		<?php } ?>

	</tbody>
</table>
</div>

<a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">BACK</a>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#example').DataTable();
	});
</script>
