<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wisata extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='wisata/tampil_datawisata';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Wisata';
		$isi['data']		=$this->db->get('wisata');
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
		$config['upload_path']="./imagesw/";
		$config['allowed_types']='jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('form_tambahwisata',$error);
			//$this->load->view('main_view',$error);
		}
		else
		{
			$file_data=$this->upload->data();
			$data['img']=base_url().'/imagesw/'.$file_data['file_name'];
			$this->load->view('success_msg',$data); 
		}
	}




	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='wisata/form_tambahwisata';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Wisata';
		//dari form        //daridbms

			
			$isi['namaw']	= ''; 
			$isi['lokasiw']	= ''; 
			$isi['ketw']	= '';
			$isi['longw']	= ''; 
			$isi['latw']	= ''; 
			$isi['linkw']	= '';
			
		$this->load->view('tampilan_home',$isi);
	}
	
	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		
		//$key = $this->input->post('id');
		$key = $this->session->flashdata('key');
		//dari dbms                   //dari form name
		$n=$this->input->post('namaw');		
		$data['namaw']	=$this->input->post('namaw');		
		$data['lokasiw']=$this->input->post('lokasiw');
		$data['ketw']	=$this->input->post('ketw');
		$data['longw']=$this->input->post('longw');
		$data['latw']	=$this->input->post('latw');
		$data['linkw']	=$this->input->post('linkw');
		
		$this->session->set_userdata('nlog',$this->input->post('namaw'));
		$this->load->model('model_wisata');	

		$query =$this->model_wisata->getdata($key);		

		$qnama =$this->model_wisata->getnama($n);
		//$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $nmfile = $this->input->post('namaw');
        $config['upload_path'] = './imagesw/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        



        $this->load->library('upload',$config);

		if($query->num_rows()>0)
		{
			if($_FILES['linkw']['name'])
        {
            if ($this->upload->do_upload('linkw'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                );
                $data['linkw']	=$gbr['file_name'];
               
               $this->model_wisata->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses disimpan!!!');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload wisata !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }else{
        	$data2['namaw']	=$this->input->post('namaw');
        	$data2['lokasiw']=$this->input->post('lokasiw');
			$data2['ketw']	=$this->input->post('ketw');
			$data2['longw']=$this->input->post('longw');
			$data2['latw']	=$this->input->post('latw');
                
        	$this->model_wisata->getupdate2($key,$data2);
			$this->session->set_flashdata('info','data sukses diupdate');
        }
			
		}
		else
		{
			 if($_FILES['linkw']['name'])
        {
            if ($this->upload->do_upload('linkw'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                  
                );
                $data['linkw']	=$gbr['file_name'];
                
               $this->model_wisata->getinsert($data);
				$this->session->set_flashdata('info','data sukses disimpan');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload wisata !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
			
		}
	
		redirect('wisata/tambah');
	}
	

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='edit_wisata';
		$isi['judul'] 		='Data Wisata';
		$isi['sub_judul']	='Edit Wisata';

		$key = $this->uri->segment(3);
		$this->session->set_flashdata('key',$key);
		$this->db->where('id',$key);
		$query = $this->db->get('wisata');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms
				$isi['id']		= $row->id; 
				$isi['namaw']	= $row->namaw; 
				$isi['lokasiw']	= $row->lokasiw;
				$isi['ketw']	= $row->ketw;
				$isi['longw']	= $row->longw;
				$isi['latw']	= $row->latw;
				$isi['linkw']	= $row->linkw;
				
			}
		}
		else
		{
			//dari form        //daridbms
			$isi['id']		= '';
			$isi['namaw']	= ''; 
			$isi['lokasiw']	= '';
			$isi['ketw']	= '';
			$isi['longw']	= '';
			$isi['latw']	= '';
			$isi['linkw']	= ''; 
			
		}


		$this->load->view('tampilan_home',$isi);
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();		
		$this->load->model('model_wisata');
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('wisata');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms 
				$isi	= $row->namaw; 
			}
			$this->session->set_userdata('nlog',$isi);
			$this->model_wisata->getdelete($key);

		}
		redirect('wisata');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */