<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_keamanan extends CI_model {
	
	public function getkeamanan(){
	$username=$this->session->userdata('username');
	$name=$this->session->userdata('nama_lengkap');
	$this->db->where('username',$username);
	$this->db->where('nama_lengkap',$name);
	$query = $this->db->get('admins');
	if ($query->num_rows()>0){
	foreach ($query->result() as $row) {
		$ses=$row->akun;
		if($ses=="nonaktif"){
		$this->session->sess_destroy();
		redirect('login');
	}
	}
}
	if(empty($username))
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */