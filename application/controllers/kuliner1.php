<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kuliner1 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='kuliner/tampil_logkuliner';
		$isi['judul'] 		='Log';
		$isi['sub_judul']	='Log kuliner';
		$isi['data']		=$this->db->get('log_kuliner');
		$this->load->view('tampilan_home',$isi);
	}

	

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='edit_kuliner';
		$isi['judul'] 		='Data kuliner';
		$isi['sub_judul']	='Edit kuliner';

		$key = $this->uri->segment(3);
		$this->session->set_flashdata('key',$key);
		$this->db->where('id',$key);
		$query = $this->db->get('kuliner');
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
		$this->load->model('model_kuliner');
		$key = $this->uri->segment(3);
		$this->db->where('id',$key);
		$query = $this->db->get('kuliner');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{//dari form          //daridbms 
				$isi	= $row->namag; 
			}
			$this->session->set_userdata('nlog',$isi);
			$this->model_kuliner->getdelete($key);

		}
		redirect('kuliner');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */