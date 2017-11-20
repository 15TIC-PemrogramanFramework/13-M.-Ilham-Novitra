<?php 
/**
* 
*/
class Mahasiswa_model2 extends CI_Model
{
	public $nama_table	= 'aspirasi';
	public $nama_table2	= 'mahasiswa';
	public $nama_table3	= 'komentar';
	public $id 			= 'id';
	public $nim 		= 'nim';
	public $order 		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}
	//untuk mengambil seluruh data mahasiswa
	function ambil_data()
	{
		$this->db->select("aspirasi.id, aspirasi.nim, mahasiswa.nama, aspirasi.pesan");
		$this->db->from($this->nama_table2);
		$this->db->join($this->nama_table,'mahasiswa.nim=aspirasi.nim');
		
		return $this->db->get()->result();
	}
	//untuk mengambil data per nim seluruh mahasiswa
	function ambil_data_nim($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}
		function ambil_data_komentar($nim)
	{
		$this->db->where($this->nim,$nim);
		return $this->db->get($this->nama_table3)->result();
	}
	function ambil_data_nimm($id)
	{
		$this->db->where($this->nim,$id);
		return $this->db->get($this->nama_table3)->row();
	}
	
	//Untuk menambakan data ke table mahasiswa
	function tambah_data ($data)
	{
		return $this->db->insert($this->nama_table,$data);
	}
		function tambah_dataa ($data)
	{
		return $this->db->insert($this->nama_table3,$data);
	}

	//Untuk menghapus data ke table mahasiswa
	function hapus_data ($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->nama_table);
	}
	//Untuk Mengedit data table mahasiswa
	function  edit_data($id,$data){
		$this->db->where($this->id,$id);
		$this->db->update($this->nama_table,$data);
	}
	//Login
	function ubah_pass($nim,$pass)
 	{

 		$this->db->set('pass', $pass);
 		$this->db->where($this->nim, $nim);
 		$this->db->update($this->nama_table2);
 	}
}
 ?>