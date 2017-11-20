<?php 
/**
* 
*/
class Mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Mahasiswa_model2');

		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$data['data_mahasiswa']=$this->Mahasiswa_model2->ambil_data();
		$this->load->view('mahasiswa/mahasiswa_list',$data);
	}
		function lihat_komentar($nim)
	{
		$data['data_mahasiswa']=$this->Mahasiswa_model2->ambil_data_komentar($nim);
		$this->load->view('mahasiswa/mahasiswa_komen',$data);
	}


	public function tambah()
	{

		$data=array(
			'action'	=>site_url('mahasiswa/tambah_aksi'),
			'nim'		=>set_value('nim'),
			'nama'		=>set_value('nama'),
			'pesan'		=>set_value('pesan'),
			'id'		=>set_value('id'),
			'button'	=>'Tambah'
		);
		$this->load->view('mahasiswa/mahasiswa_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'nama'		=>$this->input->post('nama'),
			'pesan'		=>$this->input->post('pesan')
		);
		$this->Mahasiswa_model2->tambah_data($data);
		redirect(site_url('mahasiswa'));
	}


	public function tambah2()
	{

		$data=array(
			'action'	=>site_url('mahasiswa/tambah_komentar'),
			'nim'		=>set_value('nim'),
			'nama'		=>set_value('nama'),
			'isi'		=>set_value('isi'),
			'id'		=>set_value('id'),
			'button'	=>'Tambah'
		);
		$this->load->view('mahasiswa/mahasiswa_komentar',$data);
	}

	
	

	public function delete($id)
	{
		$this->Mahasiswa_model2->hapus_data($id);
		redirect(site_url('mahasiswa'));
	}

	function edit($id)
	{
		$mhs=$this->Mahasiswa_model2->ambil_data_id($id);
		$data=array(
			'action'	=>site_url('mahasiswa/edit_aksi'),
			'id'		=>set_value('id',$mhs->id),
			'nim'		=>set_value('nim',$mhs->nim),
			'nama'		=>set_value('nama',$mhs->nama),
			'pesan'	    =>set_value('pesan',$mhs->pesan),
			'button'	=>'Edit'
		);
		$this->load->view('mahasiswa/mahasiswa_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'nama'		=>$this->input->post('nama'),
			'pesan'	=>$this->input->post('pesan')
		);
		$id=$this->input->post('id');
		$this->Mahasiswa_model2->edit_data($id,$data);
		redirect(site_url('mahasiswa'));
	}


	function edit_komentar($id)
	{

		$mhs=$this->Mahasiswa_model2->ambil_data_nim($id);
		$data=array(
			'action'	=>site_url('mahasiswa/edit_aksi_komentar'),
			'id'		=>set_value('id',$mhs->id),
			'nim'		=>set_value('nim',$mhs->nim),
			'nama'		=>set_value('nama',$mhs->nama),
			'pesan'		=>set_value('pesan',$mhs->pesan),
			'isi'	    =>set_value('isi'),
			'button'	=>'Edit'
		);
		$this->load->view('mahasiswa/mahasiswa_komentar',$data);
	}

	function edit_aksi_komentar()
	{
	$data=array(
			'id_komentar' =>$this->input->post('id_komentar'),
			'nim'		=>$this->input->post('nim'),
			'nama'		=>$this->input->post('nama'),
			'isi'		=>$this->input->post('isi')
		);
		$this->Mahasiswa_model2->tambah_dataa($data);
		redirect(site_url('mahasiswa'));
	}
}
 ?>