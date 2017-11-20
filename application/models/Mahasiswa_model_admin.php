<?php 
/**
* 
*/
class Mahasiswa_model_admin extends CI_Model
{
	public $nama_table	= 'admin';
	public $nama_table2	= 'mahasiswa';
	public $nama_table3	= 'komentar';
	public $id 		= 'id_komentar';
	public $nim 		= 'nip';
	public $order 		= 'DESC';

	function __construct()
	{
		parent::__construct();
	}
	//untuk mengambil seluruh data mahasiswa
	function ambil_data()
	{
		$this->db->order_by($this->nim,$this->order);
		return $this->db->get($this->nama_table)->result();
	}
	//untuk mengambil data per nim seluruh mahasiswa
	function ambil_data_nim($nim)
	{
		$this->db->where($this->nim,$nim);
		return $this->db->get($this->nama_table)->row();
	}

	//Untuk menambakan data ke table mahasiswa
	function tambah_data ($data)
	{
		return $this->db->insert($this->nama_table,$data);
	}

	//Untuk menghapus data ke table mahasiswa
	function hapus_data ($nim)
	{
		$this->db->where($this->nim, $nim);
		$this->db->delete($this->nama_table);
	}

	function hapus_komen($id)
	{
		$this->db->where($this->id, $id);
		$this->db->delete($this->nama_table3);
	}
	//Untuk Mengedit data table mahasiswa
	function  edit_data($nim,$data){
		$this->db->where($this->nim,$nim);
		$this->db->update($this->nama_table,$data);
	}
	//Login
	function cek_login($nim,$pass)
	{
		$this->db->where('nip', $nim);
		$this->db->where('pass', $pass);
		return $this->db->get($this->nama_table)->row();
	}
}
 ?>