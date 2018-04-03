<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_kuliner extends CI_model {
	
public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('kuliner');
		return $hasil;

	}
	public function getnama($key){
		$this->db->where('namak',$key);
		$hasil=$this->db->get('kuliner');
		return $hasil;
	}
public function getupdate($key,$data)
{
	$this->db->where('id',$key);
	$this->db->update('kuliner',$data);
	//$data['namag']	=$this->input->post('namag');
	$log['namak']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_kuliner',$log);
}

public function getinsert($data)
{
	$this->db->insert('kuliner',$data);
	
	$log['namak']=$this->session->userdata('nlog');
	$log['proses']="insert";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_kuliner',$log);
}


public function getupdate2($key,$data)
{
	$this->db->set('namak','lokasik','ketk','longk','latk','linkk');
	$this->db->where('id',$key);
	$this->db->update('kuliner',$data);
	$log['namak']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	
	$this->db->insert('log_kuliner',$log);
}



public function getdelete($key)
{
	$this->db->where('id',$key);
	$this->db->delete('kuliner');
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date("H:i:s");
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	$log['namak']=$this->session->userdata('nlog');
	$log['proses']="delete";
	$this->db->insert('log_kuliner',$log);
}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */