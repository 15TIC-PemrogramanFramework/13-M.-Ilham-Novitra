<?php 
/**
* 
*/
class Mahasiswa_admin extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Mahasiswa_model2_admin');
		$this->load->model('Datamahasiswa_model_admin');
		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$data['data_mahasiswa']=$this->Mahasiswa_model2_admin->ambil_data();
		$this->load->view('mahasiswa_admin/mahasiswa_list_admin',$data);
	}
	function lihat_komentar($nim)
	{
		$data['data_mahasiswa']=$this->Mahasiswa_model2_admin->ambil_data_komentar($nim);
		$this->load->view('mahasiswa_admin/mahasiswa_komen_admin',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'	=>site_url('mahasiswa_admin/tambah_aksi'),
			'nim'		=>set_value('nim'),
			'nama'		=>set_value('nama'),
			'pesan'		=>set_value('pesan'),
			'id'		=>set_value('id'),
			'button'	=>'Tambah'
		);
		$this->load->view('mahasiswa_admin/mahasiswa_form_admin',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'nama'		=>$this->input->post('nama'),
			'pesan'		=>$this->input->post('pesan')
		);
		$this->Mahasiswa_model2_admin->tambah_data($data);
		redirect(site_url('mahasiswa_admin'));
	}

	public function delete($id)
	{
		$this->Mahasiswa_model2_admin->hapus_data($id);
		redirect(site_url('mahasiswa_admin'));
	}

	public function delete2($id_komentar)
	{
		$this->Datamahasiswa_model_admin->hapus_komen($id_komentar);
		redirect(site_url('mahasiswa_admin'));
	}

	function edit($id)
	{
		$mhs=$this->Mahasiswa_model2_admin->ambil_data_id($id);
		$data=array(
			'action'	=>site_url('mahasiswa_admin/edit_aksi'),
			'id'		=>set_value('id',$mhs->id),
			'nim'		=>set_value('nim',$mhs->nim),
			'nama'		=>set_value('nama',$mhs->nama),
			'pesan'	    =>set_value('pesan',$mhs->pesan),
			'button'	=>'Edit'
		);
		$this->load->view('mahasiswa_admin/mahasiswa_form_admin',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'nama'		=>$this->input->post('nama'),
			'pesan'		=>$this->input->post('pesan')
		);
		$id=$this->input->post('id');
		$this->Mahasiswa_model2_admin->edit_data($id,$data);
		redirect(site_url('mahasiswa_admin'));
	}


	
}
 ?>