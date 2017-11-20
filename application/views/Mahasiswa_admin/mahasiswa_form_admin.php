<?php $this->load->view('templates/header2'); ?>
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
		<label>PESAN</label>
		<input type="text" name="pesan" class="form-control" value="<?php echo $pesan;?>" placeholder="Masukkan Aspirasi Anda" required>
	</div>
	<input type="hidden" name="id" value="<?php echo $nim; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('mahasiswa_admin') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>