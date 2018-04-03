<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alam2 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='alam/form_tambahalam';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Alam';
		$isi['data']		=$this->db->get('alam');
		$this->load->view('tampilan_home',$isi);
		//$this->load->view('tampilan_home',$isi);
	}

		public function upload()
	{
		$config['upload_path']="./images/";
		$config['allowed_types']='jpg|jpeg|gif|png';
		$this->load->library('upload',$config);
		
		if(!$this->upload->do_upload())
		{
			$error = array('error'=>$this->upload->display_errors());
			$this->load->view('form_tambahalam',$error);
			//$this->load->view('main_view',$error);
		}
		else
		{
			$file_data=$this->upload->data();
			$data['img']=base_url().'/images/'.$file_data['file_name'];
			$this->load->view('success_msg',$data); 
		}
	}




	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='alam/form_tambahalam';
		$isi['judul'] 		='Form';
		$isi['sub_judul']	='Form Alam';
		
		$this->load->view('tampilan_home',$isi);
	}
	
	public function simpan()
	{
		$this->load->model('Model_alam');
		$this->model_keamanan->getkeamanan();
		
		//$key = $this->input->post('id');
		//$key = $this->session->flashdata('key');
		//dari dbms                   //dari form name
		$key['id']	=$this->input->post('id');	
		$data['namaa']	=$this->input->post('namaa');
		$data['linka']	=$this->input->post('linka');
		$data['lokasia']=$this->input->post('lokasia');
		$data['keta']	=$this->input->post('keta');
		

		$query=$this->db->get_where('alam',$key);
		if($query->num_rows()>0)
		{
			$this->db->update('alam',$key,$data);
			echo "data sukses di update";
		}
		else
		{
			$this->db->insert('alam',$data);
			echo "data sukses di simpan";
		}
	
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */