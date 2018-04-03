<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Kategori extends CI_model {
	
public function getdata($key)
	{
		$this->db->where('kode_kategori',$key);
		$hasil = $this->db->get('kategori');
		return $hasil;

	}
	public function getnama($key){
		$this->db->where('nama_kategori',$key);
		$hasil=$this->db->get('kategori');
		return $hasil;
	}
public function getupdate($key,$data)
{
	$this->db->where('kode_kategori',$key);
	$this->db->update('kategori',$data);
	//$data['namag']	=$this->input->post('namag');
	$log['nama_kategori']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_kategori',$log);
}

public function getinsert($data)
{
	$this->db->insert('kategori',$data);
	
	$log['nama_kategori']=$this->session->userdata('nlog');
	$log['proses']="insert";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_kategori',$log);
}


public function getupdate2($key,$data)
{
	$this->db->set('nama_kategori','icon');
	$this->db->where('kode_kategori',$key);
	$this->db->update('kategori',$data);
	$log['nama_kategori']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	
	$this->db->insert('log_kategori',$log);
}



public function getdelete($key)
{
	$this->db->where('kode_kategori',$key);
	$this->db->delete('kategori');
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date("H:i:s");
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	$log['nama_kategori']=$this->session->userdata('nlog');
	$log['proses']="delete";
	$this->db->insert('log_kategori',$log);
}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */