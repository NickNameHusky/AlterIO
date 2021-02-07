<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class frontend extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->model('user_model');
			$this->load->library('pagination');
		}

	public function index()
	{
		$this->awalan();
	}

	public function awalan(){
        $data['hasil']=$this->user_model->dapatclientlimit();
		$this->load->view('frontend/index',$data);
		}

		function pricelist(){
			$data['data'] = $this->user_model->tampil_databox();
			$this->load->view('frontend/pricelist',$data);
		
		}
}