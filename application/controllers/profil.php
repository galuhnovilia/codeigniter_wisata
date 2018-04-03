<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='profil/tampil_dataprofil';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Profil';

			$log['id_username']	= $this->session->userdata('id_username'); 
			$log['username']	= $this->session->userdata('username');
			$log['nama_lengkap']	= $this->session->userdata('nama_lengkap'); 
			//$isi['password']	= '';
			$log['user']	= $this->session->userdata('user');
			$log['akun']	= $this->session->userdata('akun');
			$log['tempat']	= $this->session->userdata('tempat');
			$log['tgl_lahir']	= $this->session->userdata('tgl_lahir');
			$log['jk']	= $this->session->userdata('jk');
			$log['alamat']	= $this->session->userdata('alamat');
			$log['email']	= $this->session->userdata('email');
			$log['website']	= $this->session->userdata('website'); 
			$log['no_telp']	= $this->session->userdata('no_telp');
			$log['foto']	= $this->session->userdata('foto');


		$isi['data']		=$this->db->get('profil_admin',$log);

		$this->load->view('tampilan_home2',$isi);
		//$this->load->view('tampilan_home2',$isi);
	}

	

	public function upload()
	{
		$config['upload_path']="./imagesp/";
		$config['allowed_types']='jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('form_tambahprofil',$error);
			//$this->load->view('main_view',$error);
		}
		else
		{
			$file_data=$this->upload->data();
			$data['img']=base_url().'/imagesp/'.$file_data['file_name'];
			$this->load->view('success_msg',$data); 
		}
	}




	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='profil/form_blank';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Profil';
		//dari form        //daridbms

			
			$isi['username']	= ''; 
			$isi['nama_lengkap']	= ''; 
			//$isi['password']	= '';
			//$isi['user']	= ''; 
			//$isi['akun']	= ''; 
			$isi['tempat']	= '';
			$isi['tgl_lahir']	= ''; 
			$isi['jk']	= ''; 
			$isi['alamat']	= '';
			$isi['email']	= ''; 
			$isi['website']	= ''; 
			$isi['no_telp']	= '';
			$isi['foto']	= '';
			
		$this->load->view('tampilan_home',$isi);
	}
	
	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		
		//$key = $this->input->post('id');
		$key = $this->session->flashdata('key');
		//dari dbms                   //dari form name
		$n=$this->input->post('username');		
		$data['username']	=$this->input->post('username');		
		$data['nama_lengkap']=$this->input->post('nama_lengkap');
		//$data['password']	=$this->input->post('password');
		//$data['user']=$this->input->post('user');
		//$data['akun']	=$this->input->post('akun');
		$data['tempat']=$this->input->post('tempat');
		$data['tgl_lahir']	=$this->input->post('tgl_lahir');
		$data['jk']=$this->input->post('jk');
		$data['alamat']	=$this->input->post('alamat');
		$data['email']=$this->input->post('email');
		$data['website']	=$this->input->post('website');
		$data['no_telp']	=$this->input->post('no_telp');

		$data['foto']	=$this->input->post('foto');
		
		$this->session->set_userdata('nlog',$this->input->post('username'));
		$this->load->model('model_profil');	

		$query =$this->model_profil->getdata($key);		

		$qnama =$this->model_profil->getnama($n);
		//$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $nmfile = $this->input->post('username');
        $config['upload_path'] = './imagesp/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        



        $this->load->library('upload',$config);

		if($query->num_rows()>0)
		{
			if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                );
                $data['foto']	=$gbr['file_name'];
               
               $this->model_profil->getupdate($key,$data);
				$this->session->set_flashdata('info','data sukses disimpan!!!');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id_username=\"alert\">Gagal upload profil !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }else{
        	$data2['username']	=$this->input->post('username');
        	$data2['nama_lengkap']=$this->input->post('nama_lengkap');
		//$data['password']	=$this->input->post('password');
		//$data['user']=$this->input->post('user');
		//$data['akun']	=$this->input->post('akun');
		$data2['tempat']=$this->input->post('tempat');
		$data2['tgl_lahir']	=$this->input->post('tgl_lahir');
		$data2['jk']=$this->input->post('jk');
		$data2['alamat']	=$this->input->post('alamat');
		$data2['email']=$this->input->post('email');
		$data2['website']	=$this->input->post('website');
		$data2['no_telp']	=$this->input->post('no_telp');

                
        	$this->model_profil->getupdate2($key,$data2);
			$this->session->set_flashdata('info','data sukses diupdate');
        }
			
		}
		else
		{
			 if($_FILES['foto']['name'])
        {
            if ($this->upload->do_upload('foto'))
            {
                $gbr = $this->upload->data();
                $dataq = array(
                  'nm_gbr' =>$gbr['file_name'],
                  'tipe_gbr' =>$gbr['file_type'],
                  'ket_gbr' =>$this->input->post('textket')
                  
                );
                $data['foto']	=$gbr['file_name'];
                
               $this->model_profil->getinsert($data);
				$this->session->set_flashdata('info','data sukses disimpan');
            }else{
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id_username=\"alert\">Gagal upload Profil !!</div></div>");
                redirect('upload/add'); //jika gagal maka akan ditampilkan form upload
            }
        }
			
		}
	
		redirect('profil/tambah');
	}
	

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='profil/form_editprofil';
		$isi['judul'] 		='Data Profil';
		$isi['sub_judul']	='Edit Profil';

		$key = $this->uri->segment(3);
		$this->session->set_flashdata('key',$key);
		$this->db->where('id_username',$key);
		$query = $this->db->get('profil_admin');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms

				$isi['id_username']		= $row->id_username; 
				$isi['username']	= $row->username; 
				$isi['nama_lengkap']	= $row->nama_lengkap;
				//$isi['password']	= $row->password;
				//$isi['user']	= $row->user;
				//$isi['akun']	= $row->akun;
				$isi['tempat']	= $row->tempat;
				$isi['tgl_lahir']	= $row->tgl_lahir;
				$isi['jk']	= $row->jk;
				$isi['alamat']	= $row->alamat;
				$isi['email']	= $row->email;
				$isi['website']	= $row->website;
				$isi['no_telp']	= $row->no_telp;
				$isi['foto']	= $row->foto;
				
			}
		}
		else
		{
			//dari form        //daridbms
			$isi['id_username']	= ''; 
			$isi['username']	= ''; 
			$isi['nama_lengkap']	= ''; 
			//$isi['password']	= '';
			//$isi['user']	= ''; 
		//	$isi['akun']	= ''; 
			$isi['tempat']	= '';
			$isi['tgl_lahir']	= ''; 
			$isi['jk']	= ''; 
			$isi['alamat']	= '';
			$isi['email']	= ''; 
			$isi['website']	= ''; 
			$isi['no_telp']	= '';
			$isi['foto']	= '';
			
		}


		$this->load->view('tampilan_home',$isi);
	}

	public function delete()
	{
		$this->model_keamanan->getkeamanan();		
		$this->load->model('model_profil');
		$key = $this->uri->segment(3);
		$this->db->where('id_username',$key);
		$query = $this->db->get('profil_admin');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms 
				$isi	= $row->username; 
			}
			$this->session->set_userdata('nlog',$isi);
			$this->model_profil->getdelete($key);

		}
		redirect('profil');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */