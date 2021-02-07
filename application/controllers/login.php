<?php
class login extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('user_model');
	}
		public function index(){
			$cek=$this->session->userdata('logged_in');
			if (empty($cek))
			{
				$this->load->view('backend/login');
			}
			else
			{
				header('location:'.base_url().'admin');
			}
		}
	
	public function ceklogin(){
		$u=$this->input->post('txtusername');
		$p=$this->input->post('txtpassword');

		$cekdata=$this->user_model->getlogindata($u,$p);
		if ($cekdata){
			echo "<script type='text/javascript'>alert('Anda Berhasil Login');"
			."window.location='".base_url()."admin';</script>";
		}else{
			echo "<script type='text/javascript'>alert('Anda Gagal Login');"
			."window.location='".base_url()."login';</script>";
		}
	}

	public function logout(){
		$cek=$this->session->userdata('logged_in');
		if (empty($cek))
		{
			header('location:'.base_url().'login');		
		} else
		{
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('kodeuser');
			$this->session->unset_userdata('namauser');
			$this->session->unset_userdata('status');
			$this->session->sess_destroy();
			header('location:'.base_url().'login');
		}
	}
	}
?>