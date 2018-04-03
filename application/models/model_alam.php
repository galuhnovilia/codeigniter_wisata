<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_alam extends CI_model {
	
public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('alam');
		return $hasil;

	}
	public function getnama($key){
		$this->db->where('namaa',$key);
		$hasil=$this->db->get('alam');
		return $hasil;
	}
public function getupdate($key,$data)
{
	$this->db->where('id',$key);
	$this->db->update('alam',$data);
	//$data['namag']	=$this->input->post('namag');
	$log['namaa']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_alam',$log);
}

public function getinsert($data)
{
	$this->db->insert('alam',$data);
	
	$log['namaa']=$this->session->userdata('nlog');
	$log['proses']="insert";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_alam',$log);
}


public function getupdate2($key,$data)
{
	$this->db->set('namaa','lokasia','keta','longa','lata','linka');
	$this->db->where('id',$key);
	$this->db->update('alam',$data);
	$log['namaa']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	
	$this->db->insert('log_alam',$log);
}



public function getdelete($key)
{
	$this->db->where('id',$key);
	$this->db->delete('alam');
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date("H:i:s");
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	$log['namaa']=$this->session->userdata('nlog');
	$log['proses']="delete";
	$this->db->insert('log_alam',$log);
}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */