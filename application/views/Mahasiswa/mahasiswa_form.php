<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">
	
	<div class="form-group">
		<label>PESAN</label>
		<input type="text" name="pesan" class="form-control" value="<?php echo $pesan;?>" placeholder="Masukkan Aspirasi Anda" required>
	</div>
	<input type="hidden" name="nim" value="<?php echo $this->session->userdata('username'); ?>">
	<input type="hidden" name="nama" value="<?php echo $this->session->userdata('nama'); ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>