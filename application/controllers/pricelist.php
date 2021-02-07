<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pricelist extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->model('user_model');
			$this->load->library('pagination');
        }
        
public function index(){
			$data['data'] = $this->user_model->tampil_databox();
			$this->load->view('frontend/pricelist',$data);
		
        }
        function tambah(){
            $this->user_model->cek_field_price();
			$this->user_model->simpanprice();
			$this->session->set_flashdata('flash','dikirim');
			redirect ('pricelist');
			
        }
    }