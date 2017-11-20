<?php $this->load->view('templates/header2'); ?>
<form action="<?php echo $action; ?>" method="post">
	<div class="form-group">
		<label>NIM</label>
		<input type="text" name="nim" class="form-control" value="<?php echo $nim;?>" placeholder="Masukkan NIM" required>
	</div>

  <div class="form-group">
    <label>PASSWORD</label>
    <input type="text" name="pass" class="form-control" value="<?php echo $pass;?>" placeholder="Masukkan Password" required>
  </div>
  
	<div class="form-group">
		<label>NAMA</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $nama;?>" placeholder="Masukkan Nama" required>
	</div>



	<div class="form-group">
		<label>PRODI</label>
		</br>
		<select name="prodi">
  <option value="Teknik Informatika">Teknik Informatika</option>
  <option value="Teknik Elektronika Telekomunikasi">Teknik Elektronika Telekomunikasi</option>
  <option value="Sistem Informasi">Sistem Informasi</option>
  <option value="Teknik Mesin">Teknik Mesin</option>
  <option value="Teknik Listrik">Teknik Listrik</option>
  <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
  <option value="Teknik Elektronika">Teknik Elektronika</option>
  <option value="Teknik Mekatronika">Teknik Mekatronika</option>
  <option value="Teknik Komputer">Teknik Komputer</option>
  <option value="Akuntansi">Akuntansi</option>
  
  
</select>


		
	</div>
	<div class="form-group">
		<label>GENERASI</label>
		</br>
		<select name="generasi">
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
</select>
		
	</div>
	<div class="form-group">
		<label>JENIS KELAMIN</label>
	</br>
		<select name="jk">
  <option value="Laki-laki">Laki-laki</option>
  <option value="Perempuan">Perempuan</option>
  
</select>
<!-- 		<input type="text" name="jk" class="form-control" value="<?php echo $jk;?>" placeholder="Masukkan Jenis Kelamin" required>
 -->	</div>



	<input type="hidden" name="id" value="<?php echo $nim; ?>">
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('datamahasiswa_admin') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('templates/footer'); ?>