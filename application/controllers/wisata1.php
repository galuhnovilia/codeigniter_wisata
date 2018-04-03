<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wisata1 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='wisata/tampil_logwisata';
		$isi['judul'] 		='Log';
		$isi['sub_judul']	='Log Wisata';
		$isi['data']		=$this->db->get('log_wisata');
		$this->load->view('tampilan_home',$isi);
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
				$isi	= $row->namag; 
			}
			$this->session->set_userdata('nlog',$isi);
			$this->model_wisata->getdelete($key);

		}
		redirect('wisata');
	}


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */