<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori1 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='kategori/tampil_logkategori';
		$isi['judul'] 		='Log';
		$isi['sub_judul']	='Log kategori';
		$isi['data']		=$this->db->get('log_kategori');
		$this->load->view('tampilan_home',$isi);
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
			{//dari form          //darkode_kategoribms
				$isi['kode_kategori']		= $row->kode_kategori; 
				$isi['namak']	= $row->namak; 
				$isi['icon']	= $row->icon;
			}
		}
		else
		{
			//dari form        //darkode_kategoribms
			$isi['kode_kategori']		= '';
			$isi['namak']	= ''; 
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
			{//dari form          //darkode_kategoribms 
				$isi	= $row->namag; 
			}
			$this->session->set_userdata('nlog',$isi);
			$this->model_kategori->getdelete($key);

		}
		redirect('kategori');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */