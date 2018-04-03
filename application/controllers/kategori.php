<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='kategori/tampil_datakategori';
		$isi['judul'] 		='Tabel';
		$isi['sub_judul']	='Tabel kategori';
		$isi['data']		=$this->db->get('kategori');
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
		$config['upload_path']="./icons/";
		$config['allowed_types']='jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('form_tambahkategori',$error);
			//$this->load->view('main_view',$error);
		}
		else
		{
			$file_data=$this->upload->data();
			$data['img']=base_url().'/icons/'.$file_data['file_name'];
			$this->load->view('success_msg',$data); 
		}
	}




	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='kategori/form_tambahkategori';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form kategori';
		//dari form        //daridbms

			
			$isi['nama_kategori']	= ''; 
			 
			$isi['icon']	= '';
			
		$this->load->view('tampilan_home',$isi);
	}
	
	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		
		//$key = $this->input->post('id');
		$key = $this->session->flashdata('key');
		//dari dbms                   //dari form name
		$n=$this->input->post('nama_kategori');		
		$data['nama_kategori']	=$this->input->post('nama_kategori');		
		
		$data['icon']	=$this->input->post('icon');
		
		$this->session->set_userdata('nlog',$this->input->post('nama_kategori'));
		$this->load->model('model_kategori');	

		$query =$this->model_kategori->getdata($key);		

		$qnama =$this->model_kategori->getnama($n);
		//$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $nmfile = $this->input->post('nama_kategori');
        $config['upload_path'] = './icons/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        



        $this->load->library('upload',$config);

		if($query->num_rows()>0)
		{
			if($_FILES['icon']['name'])
        {
            if ($this->upload->do_upload('icon'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                );
                $data['icon']	=$gbr['file_name'];
               
               $this->model_kategori->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses disimpan!!!');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" kode_kategori=\"alert\">Gagal upload kategori !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }else{
        	$data2['nama_kategori']	=$this->input->post('nama_kategori');
        	
                
        	$this->model_kategori->getupdate2($key,$data2);
			$this->session->set_flashdata('info','data sukses diupdate');
        }
			
		}
		else
		{
			 if($_FILES['icon']['name'])
        {
            if ($this->upload->do_upload('icon'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                  
                );
                $data['icon']	=$gbr['file_name'];
                
               $this->model_kategori->getinsert($data);
				$this->session->set_flashdata('info','data sukses disimpan');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" kode_kategori=\"alert\">Gagal upload kategori !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
			
		}
	
		redirect('kategori/tambah');
	}
	

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='edit_kategori';
		$isi['judul'] 		='Data kategori';
		$isi['sub_judul']	='Edit kategori';

		$key = $this->uri->segment(3);
		$this->session->set_flashdata('key',$key);
		$this->db->where('kode_kategori',$key);
		$query = $this->db->get('kategori');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms
				$isi['kode_kategori']		= $row->kode_kategori; 
				$isi['nama_kategori']	= $row->nama_kategori; 
				
				$isi['icon']	= $row->icon;
				
			}
		}
		else
		{
			//dari form        //daridbms
			$isi['kode_kategori']		= '';
			$isi['nama_kategori']	= ''; 
			
			$isi['icon']	= ''; 
			
		}


		$this->load->view('tampilan_home',$isi);
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();		
		$this->load->model('model_kategori');
		$key = $this->uri->segment(3);
		$this->db->where('kode_kategori',$key);
		$query = $this->db->get('kategori');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms 
				$isi	= $row->nama_kategori; 
			}
			$this->session->set_userdata('nlog',$isi);
			$this->model_kategori->getdelete($key);

		}
		redirect('kategori');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */