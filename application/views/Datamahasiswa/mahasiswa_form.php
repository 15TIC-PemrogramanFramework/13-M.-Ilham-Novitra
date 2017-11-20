<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>NIM</label>
		<input type="text" name="nim" class="form-control" value="<?php echo $nim;?>" placeholder="Masukkan NIM" required>
	</div>
	<div class="form-group">
		<label>NAMA</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $nama;?>" placeholder="Masukkan Nama" required>
	</div>
	<div class="form-group">
		<label>PRODI</label>
		<input type="text" name="prodi" class="form-control" value="<?php echo $prodi;?>" placeholder="Masukkan Prodi" required>
	</div>
	<div class="form-group">
		<label>GENERASI</label>
		<input type="text" name="generasi" class="form-control" value="<?php echo $generasi;?>" placeholder="Masukkan Generasi" required>
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" name="jk" class="form-control" value="<?php echo $jk;?>" placeholder="Masukkan Jenis Kelamin" required>
	</div>
	<input type="hidden" name="id" value="<?php echo $nim; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('datamahasiswa') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>