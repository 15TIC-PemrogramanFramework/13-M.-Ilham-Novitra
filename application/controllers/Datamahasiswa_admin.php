<?php 
/**
* 
*/
class Datamahasiswa_admin extends CI_Controller
{
	
	function __construct()
	{
		
		parent::__construct();
		$this->load->model('Datamahasiswa_model_admin');

		if (!$this->session->userdata('logined') ||
		$this->session->userdata('logined') != true)
		{
			redirect('/');
		}
	}

	function index()
	{
		$data['data_amahasiswa']=$this->Datamahasiswa_model_admin->ambil_data();
		$this->load->view('datamahasiswa_admin/mahasiswa_list_admin',$data);
	}

	public function tambah()
	{
		$data=array(
			'action'	=>site_url('datamahasiswa_admin/tambah_aksi'),
			'nim'		=>set_value('nim'),
			'pass'		=>set_value('pass'),
			'nama'		=>set_value('nama'),
			'prodi'		=>set_value('prodi'),
			'generasi'	=>set_value('generasi'),
			'jk'		=>set_value('jk'),
			'button'	=>'Tambah'
		);
		$this->load->view('datamahasiswa_admin/mahasiswa_form_admin',$data);
	}

	function tambah_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'pass'		=>$this->input->post('pass'),
			'nama'		=>$this->input->post('nama'),
			'prodi'		=>$this->input->post('prodi'),
			'generasi'	=>$this->input->post('generasi'),
			'jk'		=>$this->input->post('jk')
		);
		$this->Datamahasiswa_model_admin->tambah_data($data);
		redirect(site_url('datamahasiswa_admin'));
	}

	public function delete($nim)
	{
		$this->Datamahasiswa_model_admin->hapus_data($nim);
		redirect(site_url('datamahasiswa_admin'));
	}

	public function delete2($id)
	{
		$this->Datamahasiswa_model_admin->hapus_komen($id);
		redirect(site_url('datamahasiswa_admin'));
	}

	function edit($nim)
	{
		$mhs=$this->Datamahasiswa_model_admin->ambil_data_nim($nim);
		$data=array(
			'action'	=>site_url('datamahasiswa_admin/edit_aksi'),
			'nim'		=>set_value('nim',$mhs->nim),
			'pass'		=>set_value('pass'),
			'nama'		=>set_value('nama',$mhs->nama),
			'prodi'		=>set_value('pesan',$mhs->prodi),
			'generasi'	=>set_value('nim',$mhs->generasi),
			'jk'		=>set_value('nama',$mhs->jk),
			'button'	=>'Edit'
		);
		$this->load->view('datamahasiswa_admin/mahasiswa_form_admin',$data);
	}

	function edit_aksi()
	{
		$data=array(
			'nim'		=>$this->input->post('nim'),
			'pass'		=>$this->input->post('pass'),
			'nama'		=>$this->input->post('nama'),
			'prodi'		=>$this->input->post('prodi'),
			'generasi'	=>$this->input->post('generasi'),
			'jk'		=>$this->input->post('jk')
		);
		$nim=$this->input->post('nim');
		$this->Datamahasiswa_model_admin->edit_data($nim,$data);
		redirect(site_url('datamahasiswa_admin'));
	}
}
 ?>