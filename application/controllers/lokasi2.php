<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lokasi2 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='lokasi/form_tambahlokasi';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form lokasi';
		/*$this->db->select('*');
		$this->db->from('lokasi');
		$this->db->join('kategori','lokasi.kode_kategori=kategori.kode_kategori','INNER');
		//$this->db->where('lokasi.kode_kategori',2);
		//$isi['data']		=$this->db->get('lokasi');
		$isi['data']		=$this->db->get();


			$log['id']	= $this->session->userdata('id'); 
			$log['nama_lokasi']	= $this->session->userdata('nama_lokasi');
			$log['lokasi']	= $this->session->userdata('lokasi'); 
			//$isi['password']	= '';
			$log['keta']	= $this->session->userdata('keta');
			$log['longtd']	= $this->session->userdata('longtd');
			$log['lattd']	= $this->session->userdata('lattd');
			$log['linka']	= $this->session->userdata('linka');
			$log['kode_kategori']	= $this->session->userdata('kode_kategori');
			


		$isi['data']		=$this->db->get('lokasi',$log);*/
		$isi['data']		=$this->db->get('kategori');
		$this->load->view('tampilan_home',$isi);
		//$this->load->view('tampilan_home',$isi);
	}



	public function kat()
	{
		//$this->load->view('main_view',array('error'=>''));
		$isi['data']		=$this->db->get('kategori');
		
	}


	public function upload()
	{
		$config['upload_path']="./photos/";
		$config['allowed_types']='jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('form_tambahlokasi',$error);
			//$this->load->view('main_view',$error);
		}
		else
		{
			$file_data=$this->upload->data();
			$data['img']=base_url().'/photos/'.$file_data['file_name'];
			$this->load->view('success_msg',$data); 
		}
	}




	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='lokasi/form_tambahlokasi';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form lokasi';
		//dari form        //daridbms

			
			$isi['nama_lokasi']	= ''; 
			$isi['lokasi']	= ''; 
			$isi['keta']	= '';
			$isi['longtd']	= ''; 
			$isi['lattd']	= ''; 
			$isi['linka']	= '';
			$isi['kode_kategori']	= '';
			
		$this->load->view('tampilan_home',$isi);
	}
	
	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		
		//$key = $this->input->post('id');
		$key = $this->session->flashdata('key');
		//dari dbms                   //dari form name
		$n=$this->input->post('nama_lokasi');		
		$data['nama_lokasi']	=$this->input->post('nama_lokasi');		
		$data['lokasi']=$this->input->post('lokasi');
		$data['keta']	=$this->input->post('keta');
		$data['longtd']=$this->input->post('longtd');
		$data['lattd']	=$this->input->post('lattd');
		$data['linka']	=$this->input->post('linka');
		$data['kode_kategori']	=$this->input->post('kode_kategori');
		
		$this->session->set_userdata('nlog',$this->input->post('nama_lokasi'));
		$this->load->model('model_lokasi');	

		$query =$this->model_lokasi->getdata($key);		

		$qnama =$this->model_lokasi->getnama($n);
		//$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $nmfile = $this->input->post('nama_lokasi');
        $config['upload_path'] = './photos/'; //path folder
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
               
               $this->model_lokasi->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses disimpan!!!');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload lokasi !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }else{
        	$data2['nama_lokasi']	=$this->input->post('nama_lokasi');
        	$data2['lokasi']=$this->input->post('lokasi');
			$data2['keta']	=$this->input->post('keta');
			$data2['longtd']=$this->input->post('longtd');
			$data2['lattd']	=$this->input->post('lattd');
			$data2['kode_kategori']	=$this->input->post('kode_kategori');
                
        	$this->model_lokasi->getupdate2($key,$data2);
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
                
               $this->model_lokasi->getinsert($data);
				$this->session->set_flashdata('info','data sukses disimpan');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload lokasi !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
			
		}
	
		redirect('lokasi2');
	}
	

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='edit_lokasi';
		$isi['judul'] 		='Data lokasi';
		$isi['sub_judul']	='Edit lokasi';

		$key = $this->uri->segment(3);
		$this->session->set_flashdata('key',$key);
		$this->db->where('id',$key);
		$query = $this->db->get('lokasi');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms
				$isi['id']		= $row->id; 
				$isi['nama_lokasi']	= $row->nama_lokasi; 
				$isi['lokasi']	= $row->lokasi;
				$isi['keta']	= $row->keta;
				$isi['longtd']	= $row->longtd;
				$isi['lattd']	= $row->lattd;
				$isi['linka']	= $row->linka;
				$isi['kode_kategori']	= $row->kode_kategori;
				
			}
		}
		else
		{
			//dari form        //daridbms
			$isi['id']		= '';
			$isi['nama_lokasi']	= ''; 
			$isi['lokasi']	= '';
			$isi['keta']	= '';
			$isi['longtd']	= '';
			$isi['lattd']	= '';
			$isi['linka']	= ''; 
			$isi['kode_kategori']	= ''; 
			
		}


		$this->load->view('tampilan_home',$isi);
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();		
		$this->load->model('model_lokasi');
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('lokasi');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms 
				$isi	= $row->nama_lokasi; 
			}
			$this->session->set_userdata('nlog',$isi);
			$this->model_lokasi->getdelete($key);

		}
		redirect('lokasi');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */