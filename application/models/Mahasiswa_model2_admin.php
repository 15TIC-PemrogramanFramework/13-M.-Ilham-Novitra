<?php 
/**
* 
*/
class Mahasiswa_model2_admin extends CI_Model
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
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_table)->result();
	}
	//untuk mengambil data per nim seluruh mahasiswa
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_table)->row();
	}

	function ambil_data_komentar($nim)
	{
		$this->db->where($this->nim,$nim);
		return $this->db->get($this->nama_table3)->result();
	}

	//Untuk menambakan data ke table mahasiswa
	function tambah_data ($data)
	{
		return $this->db->insert($this->nama_table,$data);
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
	function cek_login($nim,$pass)
	{
		$this->db->where('nim', $nim);
		$this->db->where('pass', $pass);
		return $this->db->get($this->nama_table)->row();
	}
}
 ?>