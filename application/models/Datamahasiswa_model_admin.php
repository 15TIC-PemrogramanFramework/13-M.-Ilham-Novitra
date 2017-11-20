<?php 
/**
* 
*/
class Datamahasiswa_model_admin extends CI_Model
{
	public $nama_table	= 'mahasiswa';
	public $nama_table2	= 'komentar';
	public $nim 		= 'nim';
	public $id_komentar 		= 'id_komentar';
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
	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	}

	//Untuk menghapus data ke table mahasiswa
	function hapus_data ($nim)
	{
		$this->db->where($this->nim, $nim);
		$this->db->delete($this->nama_table);
	}
	function hapus_komen ($id_komentar)
	{
		$this->db->where($this->id_komentar, $id_komentar);
		$this->db->delete($this->nama_table2);
	}
	//Untuk Mengedit data table mahasiswa
	function  edit_data($nim,$data){
		$this->db->where($this->nim,$nim);
		$this->db->update($this->nama_table,$data);
	}
	//Login
	function cek_login($nama,$nim)
	{
		$this->db->where('nama', $nama);
		$this->db->where('nim', $nim);
		return $this->db->get($this->nama_table)->row();
	}
}
 ?>