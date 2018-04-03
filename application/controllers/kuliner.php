<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kuliner extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='kuliner/tampil_datakuliner';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Kuliner';
		$isi['data']		=$this->db->get('kuliner');
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
		$config['upload_path']="./imagesk/";
		$config['allowed_types']='jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('form_tambahkuliner',$error);
			//$this->load->view('main_view',$error);
		}
		else
		{
			$file_data=$this->upload->data();
			$data['img']=base_url().'/imagesk/'.$file_data['file_name'];
			$this->load->view('success_msg',$data); 
		}
	}




	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='Kuliner/form_tambahKuliner';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Kuliner';
		//dari form        //daridbms

			
			$isi['namak']	= ''; 
			$isi['lokasik']	= ''; 
			$isi['ketk']	= '';
			$isi['longk']	= ''; 
			$isi['latk']	= ''; 
			$isi['linkk']	= '';
			
		$this->load->view('tampilan_home',$isi);
	}
	
	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		
		//$key = $this->input->post('id');
		$key = $this->session->flashdata('key');
		//dari dbms                   //dari form name
		$n=$this->input->post('namak');		
		$data['namak']	=$this->input->post('namak');		
		$data['lokasik']=$this->input->post('lokasik');
		$data['ketk']	=$this->input->post('ketk');
		$data['longk']=$this->input->post('longk');
		$data['latk']	=$this->input->post('latk');
		$data['linkk']	=$this->input->post('linkk');
		
		$this->session->set_userdata('nlog',$this->input->post('namak'));
		$this->load->model('model_Kuliner');	

		$query =$this->model_Kuliner->getdata($key);		

		$qnama =$this->model_Kuliner->getnama($n);
		//$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $nmfile = $this->input->post('namak');
        $config['upload_path'] = './imagesk/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        



        $this->load->library('upload',$config);

		if($query->num_rows()>0)
		{
			if($_FILES['linkk']['name'])
        {
            if ($this->upload->do_upload('linkk'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                );
                $data['linkk']	=$gbr['file_name'];
               
               $this->model_Kuliner->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses disimpan!!!');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload Kuliner !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }else{
        	$data2['namak']	=$this->input->post('namak');
        	$data2['lokasik']=$this->input->post('lokasik');
			$data2['ketk']	=$this->input->post('ketk');
			$data2['longk']=$this->input->post('longk');
			$data2['latk']	=$this->input->post('latk');
                
        	$this->model_Kuliner->getupdate2($key,$data2);
			$this->session->set_flashdata('info','data sukses diupdate');
        }
			
		}
		else
		{
			 if($_FILES['linkk']['name'])
        {
            if ($this->upload->do_upload('linkk'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                  
                );
                $data['linkk']	=$gbr['file_name'];
                
               $this->model_Kuliner->getinsert($data);
				$this->session->set_flashdata('info','data sukses disimpan');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload Kuliner !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
			
		}
	
		redirect('kuliner/tambah');
	}
	

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='edit_kuliner';
		$isi['judul'] 		='Data Kuliner';
		$isi['sub_judul']	='Edit Kuliner';

		$key = $this->uri->segment(3);
		$this->session->set_flashdata('key',$key);
		$this->db->where('id',$key);
		$query = $this->db->get('Kuliner');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms
				$isi['id']		= $row->id; 
				$isi['namak']	= $row->namak; 
				$isi['lokasik']	= $row->lokasik;
				$isi['ketk']	= $row->ketk;
				$isi['longk']	= $row->longk;
				$isi['latk']	= $row->latk;
				$isi['linkk']	= $row->linkk;
				
			}
		}
		else
		{
			//dari form        //daridbms
			$isi['id']		= '';
			$isi['namak']	= ''; 
			$isi['lokasik']	= '';
			$isi['ketk']	= '';
			$isi['longk']	= '';
			$isi['latk']	= '';
			$isi['linkk']	= ''; 
			
		}


		$this->load->view('tampilan_home',$isi);
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();		
		$this->load->model('model_Kuliner');
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('Kuliner');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms 
				$isi	= $row->namak; 
			}
			$this->session->set_userdata('nlog',$isi);
			$this->model_Kuliner->getdelete($key);

		}
		redirect('kuliner');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */