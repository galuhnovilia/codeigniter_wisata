<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images_examples extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='example';
		$isi['judul'] 		='Galeri';
		$isi['sub_judul']	='Galeri Alam';
		
		//$isi['data']		=$this->db->join('alam d','d.id=m.id')->join('wisata a','a.id=d.id')->where('m.id')->get('kuliner m');
		//$isi['data']		=$this->db->query('select*from alam m JOIN wisata d ON m.id=d.id');

		$isi['data']		=$this->db->get('alam');
		

		$this->load->view('tampilan_home',$isi);
		//$this->load->view('tampilan_home',$isi);
	}
	
	public function index1()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='example1';
		$isi['judul'] 		='Galeri';
		$isi['sub_judul']	='Galeri Wisata';
		$isi['data']		=$this->db->get('wisata');
		

		$this->load->view('tampilan_home',$isi);
		//$this->load->view('tampilan_home',$isi);
	}

	public function index2()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='example2';
		$isi['judul'] 		='Galeri';
		$isi['sub_judul']	='Galeri Kuliner';
		$isi['data']		=$this->db->get('kuliner');
		

		$this->load->view('tampilan_home',$isi);
		//$this->load->view('tampilan_home',$isi);
	}
	
	
	}


	


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */