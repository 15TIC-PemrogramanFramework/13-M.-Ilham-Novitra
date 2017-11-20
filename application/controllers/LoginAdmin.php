<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class LoginAdmin extends CI_Controller
{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Mahasiswa_model_admin');
 
	}
 
	function index(){
		if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
		{
			redirect('member');
		}
		
		if(!$this->input->post())
		{
			$this->load->view('loginmember');
		}
		else
		{
			$cek_login=$this->Mahasiswa_model_admin->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
				
			);
			if(!empty($cek_login))
			{
				$this->session->set_userdata('logined', true);
				$this->session->set_userdata('username', $cek_login->nim);
				$this->session->set_userdata('nama', $cek_login->nama);
				redirect("Home_admin");
			}
			else 
			{
				redirect("loginadmin");
			}
		}
	
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('loginadmin'));
	}

}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */