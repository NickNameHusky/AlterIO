<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form','url'));
		$this->load->model('user_model');
		}

	public function index()
	{
		$this->awalan();
	}

	public function awalan(){
        $cek=$this->session->userdata('logged_in');
		if (empty($cek))
		{
			header('location:'.base_url().'login');		
		} else{
        $data['result'] = $this->db->get("client")->result();
        $this->db->where('status','0');
        $data['totalclient']=  $this->db->count_all_results('pesan');
            foreach ($data['result'] as $key => $value) {
            $data['data'][$key]['title'] = $value->namaclient;
            $data['data'][$key]['start'] = $value->Tanggal;
            $data['data'][$key]['end'] = $value->Tanggal;
            $data['data'][$key]['backgroundColor'] = "#00a65a";
        }

			$this->load->view('backend/header',$data);
			$this->load->view('backend/awal',$data);
		//	$this->load->view('backend/footer');
        }
    }
        public function gettot(){
            $this->db->where('status','0');
            $data['totalclient']=  $this->db->count_all_results('pesan');
			echo json_encode($data);
		}
	
        public function paket(){
            $cek=$this->session->userdata('logged_in');
            if (empty($cek))
            {
                header('location:'.base_url().'login');		
            } else{

            $this->db->where('status','0');
        $data['totalclient']=  $this->db->count_all_results('pesan');
			$data['judul'] = 'Daftar Paket';
            $data['hasil']=$this->user_model->dapatpaket();
			$this->load->view('backend/header',$data);
			$this->load->view('backend/paket',$data);
            $this->load->view('backend/footer');
            }
        }
        public function tambahclient(){
            $cek=$this->session->userdata('logged_in');
            if (empty($cek))
            {
                header('location:'.base_url().'login');		
            } else{

            $this->db->where('status','0');
        $data['totalclient']=  $this->db->count_all_results('pesan');
			$this->load->view('backend/header',$data);
			$this->load->view('backend/tambahclient');
            $this->load->view('backend/footer');
            }
        }
        public function pesan(){
            $cek=$this->session->userdata('logged_in');
            if (empty($cek))
            {
                header('location:'.base_url().'login');		
            } else{

            $this->db->where('status','0');
            $data['totalclient']=  $this->db->count_all_results('pesan');
			$data['hasil']=$this->user_model->dapatpesan();
			$this->load->view('backend/header',$data);
			$this->load->view('backend/pesan',$data);
			$this->load->view('backend/footer');
        }
    }
        public function pesandibaca(){
            $cek=$this->session->userdata('logged_in');
            if (empty($cek))
            {
                header('location:'.base_url().'login');		
            } else{

            $this->db->where('status','0');
            $data['totalclient']=  $this->db->count_all_results('pesan');
			$data['hasil']=$this->user_model->dapatpesandibaca();
			$this->load->view('backend/header',$data);
			$this->load->view('backend/pesandibaca',$data);
			$this->load->view('backend/footer');
        }
    }
        function updatepesan(){
            $cek=$this->session->userdata('logged_in');
            if (empty($cek))
            {
                header('location:'.base_url().'login');		
            } else{

	$id = $this->uri->segment(3);
			$hasil = $this->user_model->ubahpesan($id);
			if ($hasil ==1){
				$this->session->set_flashdata('flash','Dibaca');
				redirect ('admin/pesan');
			}else{
				echo"<script>alert('data gagal diubah');history.go(-1);</script>";
			}
        }
    }
        public function client(){
            $cek=$this->session->userdata('logged_in');
            if (empty($cek))
            {
                header('location:'.base_url().'login');		
            } else{

            $this->db->where('status','0');
            $data['totalclient']=  $this->db->count_all_results('pesan');
			$data['judul'] = 'Daftar Client';
            $data['hasil']=$this->user_model->dapatclient();
			$this->load->view('backend/header',$data);
			$this->load->view('backend/client',$data);
			$this->load->view('backend/footer');
}
}
        function simpanclient(){
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
            $config['max_size']='2048';
            $config['max_width']='1288';
            $config['max_height']='768';
            $this->upload->initialize($config);
            chmod('./gambar/',0777);
            if (!$this->upload->do_upload()){
                $a=$this->upload->display_errors();
                echo $a;
            }
            else
            {
            $gbr = $this->upload->data();
                $foto=$gbr['file_name'];
                $this->user_model->cekclient($foto);
               $this->user_model->simpanfotoclient();
                    $this->session->set_flashdata('flash','Disimpan');
                    redirect ('admin/client');
        }
    }
    function detail(){
        $cek=$this->session->userdata('logged_in');
        if (empty($cek))
        {
            header('location:'.base_url().'login');		
        } else{

        $this->db->where('status','0');
        $data['totalclient']=  $this->db->count_all_results('pesan');
        $id = $this->uri->segment(3);
        $data['judul'] = 'Daftar Foto';
        $data['hasil']=$this->user_model->dapatdetail($id);
        $this->load->view('backend/header',$data);
        $this->load->view('backend/detail',$data);
        $this->load->view('backend/footer');
        }
    }
    function simpanfoto(){
        $c=$this->input->post('kode');
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']='2048';
        $config['max_width']='1288';
        $config['max_height']='768';
        $this->upload->initialize($config);
        chmod('./gambar/',0777);
        if (!$this->upload->do_upload()){
            $a=$this->upload->display_errors();
            echo $a;
        }
        else
        {
        $gbr = $this->upload->data();
            $foto=$gbr['file_name'];
            $this->user_model->cek_field_foto($foto);
            if($this->user_model->simpanfotoa())
            {
                $this->session->set_flashdata('flash','ditambahkan');
                redirect ('admin/client/');
            }
    }
    }
    function hapusclient(){
		$id = $this->uri->segment(3);
        $gbr= $this->user_model->dapatgambar($id);
        
		$hasil = $this->user_model->hapusclient($id);
		if ($hasil ==1){
			foreach($gbr->result_array() as $row){
				$filename=$row['foto'];
			}
			if (file_exists('./gambar/'.$filename)){
				if (@unlink('./gambar/'.$filename));
			}
            $this->session->set_flashdata('flash','Dihapus');
            redirect ('admin/client');
		}else{
			echo"<script>alert('data gagal dihapus');histroy.go(1);</script>";
		}
    }
    function hapusdetail(){
		$id = $this->uri->segment(3);
		$gbr= $this->user_model->dapatgambardetail($id);
		$hasil = $this->user_model->hapusdetail($id);
		if ($hasil ==1){
			foreach($gbr->result_array() as $row){
				$filename=$row['fotofoto'];
			}
			if (file_exists('./gambar/'.$filename)){
				if (@unlink('./gambar/'.$filename));
			}
            $this->session->set_flashdata('flash','Dihapus');
            redirect ('admin/client');
		}else{
			echo"<script>alert('data gagal dihapus');histroy.go(1);</script>";
		}
	}
    function hapuscheckbox(){
        
        $id = $_POST['kode']; 
		$gbr= $this->user_model->dapatgambardetaila($id);
		$hasil = $this->user_model->hapusdetaila($id);
		if ($hasil ==1){
			foreach($gbr->result_array() as $row){
				$filename=$row['fotofoto'];
			}
			if (file_exists('./gambar/'.$filename)){
				if (@unlink('./gambar/'.$filename));
			}
            $this->session->set_flashdata('flash','Dihapus');
            redirect ('admin/client');
		}else{
			echo"<script>alert('data gagal dihapus');histroy.go(1);</script>";
		    }
        }
        function ubahclient(){
            $cek=$this->session->userdata('logged_in');
            if (empty($cek))
            {
                header('location:'.base_url().'login');		
            } else{

            $this->db->where('status','0');
            $data['totalclient']=  $this->db->count_all_results('pesan');
            $id = $this->uri->segment('3');
            $data['hasil'] = $this->user_model->ambilidclient($id);
            
			$this->load->view('backend/header',$data);
			$this->load->view('backend/ubahclient',$data);
			$this->load->view('backend/footer');
            }
        }
        	function updateclient(){
                $id = $this->input->post('kode');
                $config['upload_path'] = './gambar/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
                $config['max_size']='2048';
                $config['max_width']='1288';
                $config['max_height']='768';
                $this->upload->initialize($config);
                chmod('./gambar/',0777);
                if (!$this->upload->do_upload()){
                    $a=$this->upload->display_errors();
                    echo $a;
                }
                else
                {
                $gbr = $this->upload->data();
                    $foto=$gbr['file_name'];
                    $this->user_model->cekclient($foto);
                   $this->user_model->updateclient($id);
                        $this->session->set_flashdata('flash','Diubah');
                        redirect ('admin/client');
            }
    }
}
