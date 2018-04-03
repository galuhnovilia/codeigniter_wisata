<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lokasi1 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='lokasi/tampil_loglokasi';
		$isi['judul'] 		='Log';
		$isi['sub_judul']	='Log lokasi';
		$isi['data']		=$this->db->get('log_lokasi');
		$this->load->view('tampilan_home',$isi);
	}

	

	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */