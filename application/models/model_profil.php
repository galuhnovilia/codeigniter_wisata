<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_profil extends CI_model {
	
public function getdata($key)
	{
		$this->db->where('id_username',$key);
		$hasil = $this->db->get('profil_admin');
		return $hasil;

	}
	public function getnama($key){
		$this->db->where('username',$key);
		$hasil=$this->db->get('profil_admin');
		return $hasil;
	}
public function getupdate($key,$data)
{
	$this->db->where('id_username',$key);
	$this->db->update('profil_admin',$data);
	//$data['namag']	=$this->input->post('namag');
	$log['username']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_profil',$log);
}

public function getinsert($data)
{
	$this->db->insert('profil_admin',$data);
	
	$log['username']=$this->session->userdata('nlog');
	$log['proses']="insert";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_profil',$log);
}


public function getupdate2($key,$data)
{
	$this->db->set('username','nama_lengkap','tempat','tgl_lahir','jk','alamat','email','website','no_telp');
	$this->db->where('id_username',$key);
	$this->db->update('profil_admin',$data);
	$log['username']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	
	$this->db->insert('log_profil',$log);
}



public function getdelete($key)
{
	$this->db->where('id_username',$key);
	$this->db->delete('profil_admin');
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date("H:i:s");
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	$log['namak']=$this->session->userdata('nlog');
	$log['proses']="delete";
	$this->db->insert('log_profil',$log);
}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */