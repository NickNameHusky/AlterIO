<?php
	class user_model extends CI_Model{
		function __construct(){
		parent::__construct();
    }
    public function getlogindata($u, $p){
		//	$password = MD5($p);
			$this->db->where('namauser',$u);
			$this->db->where('password',$p);
		//	$this->db->where('status','A');
			$query = $this->db->get('user');
			if($query->num_rows()==1){
				foreach ($query->result() as $row){
					$data = array(
						'logged_in'=>'yes',
						'kodeuser'=>$row->kodeuser,
						'namauser'=> $row->namauser,
					);
				}
			$this->session->set_userdata($data);
			return true;
			}
		}
    public function dapatpaket(){
        $query =$this->db->get('paket');
        if ($query->num_rows()>0)
        {
            return $query->result();

        }
        else
        {
            return FALSE;

        }
    
    }
    
    public function dapatclient(){
        $query =$this->db->get('client');
        if ($query->num_rows()>0)
        {
            return $query->result();

        }
        else
        {
            return FALSE;

        }
    
    }
    function cekclient($foto){
        $this->isian= array(
            //'kodebarang' =>$this->input->post('kode'),
            'namaclient' =>$this->input->post('nama'),
            'jenis' =>$this->input->post('jenis'),
            'Tanggal' =>$this->input->post('tanggal'),

            'foto'=>$foto
            
        );
    }
    public function simpanfotoclient(){
        $query=$this->db->insert('client',$this->isian);
        return $query;
    }
    function dapatdetail($id){
        $query =$this->db->query("select * from detail,client where detail.kodeclient=client.kodeclient and detail.kodeclient ='$id'");
        if ($query->num_rows()>0)
        {
            return $query->result();

        }
        else
        {
            return FALSE;

        }
    }
    function dapatclientlimit(){
        $query =$this->db->query("select * from client order by Tanggal desc limit 10 ");
        if ($query->num_rows()>0)
        {
            return $query->result();

        }
        else
        {
            return FALSE;

        }
    }
    function cek_field_foto($foto){
        $this->masukan= array(
            //'kodebarang' =>$this->input->post('kode'),
            'kodeclient' =>$this->input->post('nama'),
            'fotofoto'=>$foto
            
        );
    }
    public function simpanfotoa(){
        $query=$this->db->insert('detail',$this->masukan);
        return $query;
    }
    function ambil_data_id($id){
		$this->db->where('kodeclient',$id);
		$query = $this->db->get('client');
		if ($query->num_rows()>0){
			return $query->row_array();
		}else{
			return FALSE;
		}
    }
    function dapatdataclient($limit,$start,$keyword=null){
        if($keyword){
            $this->db->like('namaclient',$keyword);
        }
                 return $this->db->get('client',$limit,$start)->result_array();
            }
            public function jumlahclient(){
                return $this->db->get('client')->num_rows();
            }
            function tampil_databox()
            {  
                $query = $this->db->get('jenisfoto');
                return $query;
            }
            public function get_events($start, $end)
            {
                return $this->db->where("Tanggal >=", $start)->where("Tanggal <=", $end)->get("client");
            }
            function dapatgambar($id){
                $this->db->where('kodeclient',$id);
                $query=$this->db->get('client');
                return$query;
            }
            function dapatpesan(){
                $query =$this->db->query("select * from pesan where status = '0' ");
                if ($query->num_rows()>0)
                {
                    return $query->result();
        
                }
                else
                {
                    return FALSE;
        
                }
            }
            function dapatpesandibaca(){
                $query =$this->db->query("select * from pesan where status = '1' ");
                if ($query->num_rows()>0)
                {
                    return $query->result();
        
                }
                else
                {
                    return FALSE;
        
                }
            }
            function dapatpesannotif(){
                $query =$this->db->query("select count(*) from pesan where status = '0' ");
                if ($query->num_rows()>0)
                {
                    return $query->result();
        
                }
                else
                {
                    return FALSE;
        
                }
            }
               function hapusclient($id){
                $this->db->where('kodeclient',$id);
                $delete = $this->db->delete('client');
                return $delete;
            }
            function dapatgambardetail($id){
                $this->db->where('kodedetail',$id);
                $query=$this->db->get('detail');
                return$query;
            }
            function hapusdetail($id){
                $this->db->where('kodedetail',$id);
                $delete = $this->db->delete('detail');
                return $delete;
            }
            function dapatgambardetaila($id){
                $this->db->where_in('kodedetail',$id);
                $query=$this->db->get('detail');
                return$query;
            }
            function hapusdetaila($id){
                $this->db->where_in('kodedetail',$id);
                $delete = $this->db->delete('detail');
                return $delete;
            }
            function cek_field_price()
            {
                $this->dataMhs = array(
                    'nama'=>$this->input->post('nama'),
                    'wa'=>$this->input->post('wa'),
                    'tanggalacara'=>$this->input->post('tanggal'),
                    'status'=>'0'

                //	'jurusan'=>$this->input->post('jurusan'),
                //	'kodedosen'=>$this->input->post('ds'),
                    //'alamat'=>$this->input->post('txtalmt'),
                //	'agama'=>$this->input->post('txtagm'),
                //	'kode_jurusan'=>$this->input->post('txtjrs'),
        
                    );
            }
                public function simpanprice(){
                    $query=$this->db->insert('pesan',$this->dataMhs);
                    return $query;
                }
                function ambilidclient($id){
                    $this->db->where('kodeclient',$id);
                    $query = $this->db->get('client');
                    if ($query->num_rows()>0){
                        return $query->row_array();
                    }else{
                        return FALSE;
                    }
                }
                function updateclient($id){
                    $this->db->where('kodeclient',$id);
                    $update = $this->db->update('client',$this->isian);
                    return $update;
                }
                function ubahpesan($id){
                        $this->dataid = array(
                            'status'=>"1",
                            );
                        $this->db->where('kodepesan',$id);
                        $update = $this->db->update('pesan',$this->dataid);
                        return $update;
                    }
        
}