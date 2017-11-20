<?php 
class gantipass_model extends CI_Model
{
	public $nama_table	= 'mahasiswa';
	public $nama 		= 'nama';


	function __construct()
	{
		parent::__construct();
	}
		function ambil_data_nama($nama)
	{
		$this->db->where($this->nama,$nama);
		return $this->db->get($this->nama_table)->row();
	}
		function ubah_pass($nama,$pass)
 	{

 		$this->db->set('pass', $pass);
 		$this->db->where($this->nama, $nama);
 		$this->db->update($this->nama_table);
 	}

}
	?>