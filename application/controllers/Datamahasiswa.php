<?php 
/**
* 
*/
class Datamahasiswa extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Datamahasiswa_model');

		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$data['data_amahasiswa']=$this->Datamahasiswa_model->ambil_data();
		$this->load->view('datamahasiswa/mahasiswa_list',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'	=>site_url('datamahasiswa/tambah_aksi'),
			'nim'		=>set_value('nim'),
			'nama'		=>set_value('nama'),
			'prodi'		=>set_value('prodi'),
			'generasi'	=>set_value('generasi'),
			'jk'		=>set_value('jk'),
			'button'	=>'Tambah'
		);
		$this->load->view('datamahasiswa/mahasiswa_form',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'nama'		=>$this->input->post('nama'),
			'prodi'		=>$this->input->post('prodi'),
			'generasi'	=>$this->input->post('generasi'),
			'jk'		=>$this->input->post('jk')
		);
		$this->Datamahasiswa_model->tambah_data($data);
		redirect(site_url('datamahasiswa'));
	}

	public function delete($nim)
	{
		$this->Datamahasiswa_model->hapus_data($nim);
		redirect(site_url('datamahasiswa'));
	}

	function edit($nim)
	{
		$mhs=$this->Datamahasiswa_model->ambil_data_id($nim);
		$data=array(
			'action'	=>site_url('datamahasiswa/edit_aksi'),
			'nim'		=>set_value('nim',$mhs->nim),
			'nama'		=>set_value('nama',$mhs->nama),
			'prodi'		=>set_value('pesan',$mhs->prodi),
			'generasi'	=>set_value('nim',$mhs->generasi),
			'jk'		=>set_value('nama',$mhs->jk),
			'button'	=>'Edit'
		);
		$this->load->view('datamahasiswa/mahasiswa_form',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'nama'		=>$this->input->post('nama'),
			'prodi'		=>$this->input->post('prodi'),
			'generasi'	=>$this->input->post('generasi'),
			'jk'		=>$this->input->post('jk')
		);
		$nim=$this->input->post('nim');
		$this->Datamahasiswa_model->edit_data($nim,$data);
		redirect(site_url('datamahasiswa'));
	}
}
 ?>