<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='map/tampil_datamap';
		$isi['judul'] 		='Map';
		$isi['sub_judul']	='Find Location';
		//$isi['data']		=$this->db->get('alam');
		$this->load->view('tampilan_home',$isi);
		//$this->load->view('tampilan_home',$isi);
	}



	


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */