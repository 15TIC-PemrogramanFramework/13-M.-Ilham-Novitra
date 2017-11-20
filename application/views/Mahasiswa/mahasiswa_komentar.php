<?php $this->load->view('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post">

	
			<div class="form-group">
		<label>KOMENTAR</label>
		<input type="text" name="isi" class="form-control" value="" placeholder="Masukkan Komentar Anda" required>
	</div>
		
	
	<input type="hidden" name="id" value="<?php echo $nim; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default">Cancel</a>

	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
		
		<input type="hidden" name="id_komentar"  class="form-control" value="" placeholder="Masukkan NIM" required>
	</div>
		</div>
		</div>
			<div class="row">
		<div class="col-md-4">
			<div class="form-group">
		<input type="hidden" name="nim"  class="form-control" value="<?php echo $nim;?>" placeholder="Masukkan Nama" required>
	</div>
		</div>
	</div>
		<div class="row">
		<div class="col-md-4">
			<div class="form-group">
	
		<input type="hidden" name="nama"  class="form-control" value="<?php echo $nama;?>" placeholder="Masukkan Nama" required>
	</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
	
		<input type="hidden" name="pesan" class="form-control" value="<?php echo $pesan;?>" placeholder="Masukkan Aspirasi Anda" required>
	</div>
		</div>
	</div>
	
	

</form>
<?php $this->load->view('templates/footer'); ?>