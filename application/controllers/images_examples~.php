<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images_examples extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		
		$isi['judul'] 		='Gallery';
		$isi['sub_judul']	='Gallery';
		//$isi['data']		=$this->db->get('example_4');
	

		$this->load->view('tampilan_home',$isi);
		//$this->load->view('tampilan_home',$isi);
	}

	function __construct()
	{
		parent::__construct();
		
		/* Standard Libraries */
		$this->load->database();
		/* ------------------ */
		
		$this->load->helper('url'); //Just for the examples, this is not required thought for the library
		
		$this->load->library('image_CRUD');
	}
	
	function _example_output($output = null)
	{
		$this->load->view('example.php',$output);	
	}
	

function example4()
	{
		$image_crud = new image_CRUD();
	
		$image_crud->set_primary_key_field('id');
		$image_crud->set_url_field('url');
		
		$image_crud->set_table('example_4')
		->set_ordering_field('priority')
		->set_image_path('assets/uploads');
			
		$output = $image_crud->render();
	
		$this->_example_output($output);

	}
	

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */