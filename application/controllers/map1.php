<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map1 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='map1/tampil_daridb';
		$isi['judul'] 		='Map';
		$isi['sub_judul']	='Map';

		//$isi['data']		=$this->db->get();
		$this->load->view('tampilan_home',$isi);
		//$this->load->view('tampilan_home',$isi);
	}



	


	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */