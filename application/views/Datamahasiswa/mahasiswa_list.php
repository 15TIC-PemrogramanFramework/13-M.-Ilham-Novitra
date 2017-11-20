<?php $this->load->view('templates/header'); ?>
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
			<th>Prodi</th>
			<th>Generasi</th>
			<th>Jenis Kelamin</th>
			
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
