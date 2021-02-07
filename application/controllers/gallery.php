<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gallery extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->model('user_model');
			$this->load->library('pagination');
        }
        
	public function index()
	{
         $this->gallery();       
	}
function gallery (){
    $this->session->unset_userdata('keyword');

    if ($this->input->post('submit')){
        $data['keyword']= $this->input->post('keyword');
        $this->session->set_userdata('keyword',$data['keyword']);
    }
    else{
        $data['keyword']=$this->session->userdata('keyword');
    }

    $this->db->like('namaclient',$data['keyword']);
    $this->db->from('client');


    $config['total_rows'] = $this->db->count_all_results();
    $data['total_rows']=$config['total_rows'];
    $config['per_page'] = 6;

    $this->pagination->initialize($config);


    $data['start'] = $this->uri->segment(3);
            $data['hasil'] = $this->user_model->dapatdataclient($config['per_page'],$data['start'],$data['keyword']);           
                $this->load->view('frontend/gallery',$data);
  
}
        function morephotos(){
			$id = $this->uri->segment(3);
			$data['nama']=$this->user_model->ambil_data_id($id);
			$data['hasil']=$this->user_model->dapatdetail($id);
		
			$this->load->view('frontend/single',$data);
		
		}
    }