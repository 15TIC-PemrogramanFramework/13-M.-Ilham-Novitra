<?php $this->load->view('templates/header'); ?>
<form class="form-horizontal" action="<?php echo site_url('about/ubah_password_aksi');?>" method="POST">
	<div class="form-group">
	<label>Password Lama</label>
	<input type="password" name="passworddulu" class="form-control" placeholder="" value="">
</div>
<!-- /.form-group -->

<div class="form-group">
	<label>Password Baru</label>
	<input type="password" name="passwordakan" class="form-control" placeholder="" value="">
</div>
<input type="hidden" name="nama" value="<?php echo $this->session->userdata('nama'); ?>">
<button type="submit" class="btn btn-primary">Simpan</button>

</form>
<?php $this->load->view('templates/footer'); ?>