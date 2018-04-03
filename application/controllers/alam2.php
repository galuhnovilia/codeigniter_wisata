<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alam2 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='alam/form_tambahalam';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Alam';
		$isi['data']		=$this->db->get('alam');
		$this->load->view('tampilan_home',$isi);
		//$this->load->view('tampilan_home',$isi);
	}

	public function index1()
	{
		//$this->load->view('main_view',array('error'=>''));
		$this->load->view('form_tambahdata',array('error'=>''));
	}

	public function upload()
	{
		$config['upload_path']="./images/";
		$config['allowed_types']='jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('form_tambahalam',$error);
			//$this->load->view('main_view',$error);
		}
		else
		{
			$file_data=$this->upload->data();
			$data['img']=base_url().'/images/'.$file_data['file_name'];
			$this->load->view('success_msg',$data); 
		}
	}




	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='alam/form_tambahalam';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Alam';
		//dari form        //daridbms

			
			$isi['namaa']	= ''; 
			$isi['lokasia']	= ''; 
			$isi['keta']	= '';
			$isi['longa']	= ''; 
			$isi['lata']	= ''; 
			$isi['linka']	= '';
			
		$this->load->view('tampilan_home',$isi);
	}
	
	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		
		//$key = $this->input->post('id');
		$key = $this->session->flashdata('key');
		//dari dbms                   //dari form name
		$n=$this->input->post('namaa');		
		$data['namaa']	=$this->input->post('namaa');		
		$data['lokasia']=$this->input->post('lokasia');
		$data['keta']	=$this->input->post('keta');
		$data['longa']=$this->input->post('longa');
		$data['lata']	=$this->input->post('lata');
		$data['linka']	=$this->input->post('linka');
		
		$this->session->set_userdata('nlog',$this->input->post('namaa'));
		$this->load->model('model_alam');	

		$query =$this->model_alam->getdata($key);		

		$qnama =$this->model_alam->getnama($n);
		//$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $nmfile = $this->input->post('namaa');
        $config['upload_path'] = './images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        



        $this->load->library('upload',$config);

		if($query->num_rows()>0)
		{
			if($_FILES['linka']['name'])
        {
            if ($this->upload->do_upload('linka'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                );
                $data['linka']	=$gbr['file_name'];
               
               $this->model_alam->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses disimpan!!!');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload alam !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }else{
        	$data2['namaa']	=$this->input->post('namaa');
                
        	$this->model_alam->getupdate2($key,$data2);
			$this->session->set_flashdata('info','data sukses diupdate');
        }
			
		}
		else
		{
			 if($_FILES['linka']['name'])
        {
            if ($this->upload->do_upload('linka'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                  
                );
                $data['linka']	=$gbr['file_name'];
                
               $this->model_alam->getinsert($data);
				$this->session->set_flashdata('info','data sukses disimpan');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload alam !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
			
		}
	
		redirect('alam/tambah');
	}
	

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='edit_alam';
		$isi['judul'] 		='Data alam';
		$isi['sub_judul']	='Edit alam';

		$key = $this->uri->segment(3);
		$this->session->set_flashdata('key',$key);
		$this->db->where('id',$key);
		$query = $this->db->get('alam');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms
				$isi['id']		= $row->id; 
				$isi['namaa']	= $row->namaa; 
				$isi['lokasia']	= $row->lokasia;
				$isi['keta']	= $row->keta;
				$isi['longa']	= $row->longa;
				$isi['lata']	= $row->lata;
				$isi['linka']	= $row->linka;
				
			}
		}
		else
		{
			//dari form        //daridbms
			$isi['id']		= '';
			$isi['namaa']	= ''; 
			$isi['lokasia']	= '';
			$isi['keta']	= '';
			$isi['longa']	= '';
			$isi['lata']	= '';
			$isi['linka']	= ''; 
			
		}


		$this->load->view('tampilan_home',$isi);
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();		
		$this->load->model('model_alam');
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('alam');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms 
				$isi	= $row->namaa; 
			}
			$this->session->set_userdata('nlog',$isi);
			$this->model_alam->getdelete($key);

		}
		redirect('alam');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */