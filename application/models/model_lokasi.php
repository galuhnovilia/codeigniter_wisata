<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_lokasi extends CI_model {
	
public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('lokasi');
		return $hasil;

	}
	public function getnama($key){
		$this->db->where('nama_lokasi',$key);
		$hasil=$this->db->get('lokasi');
		return $hasil;
	}
public function getupdate($key,$data)
{
	$this->db->where('id',$key);
	$this->db->update('lokasi',$data);
	//$data['namag']	=$this->input->post('namag');
	$log['nama_lokasi']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_lokasi',$log);
}

public function getinsert($data)
{
	$this->db->insert('lokasi',$data);
	
	$log['nama_lokasi']=$this->session->userdata('nlog');
	$log['proses']="insert";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_lokasi',$log);
}


public function getupdate2($key,$data)
{
	$this->db->set('nama_lokasi','lokasik','ketk','longk','latk','linkk','kode_kategori');
	$this->db->where('id',$key);
	$this->db->update('lokasi',$data);
	$log['nama_lokasi']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	
	$this->db->insert('log_lokasi',$log);
}



public function getdelete($key)
{
	$this->db->where('id',$key);
	$this->db->delete('lokasi');
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date("H:i:s");
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	$log['nama_lokasi']=$this->session->userdata('nlog');
	$log['proses']="delete";
	$this->db->insert('log_lokasi',$log);
}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */