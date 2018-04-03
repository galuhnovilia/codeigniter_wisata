<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_wisata extends CI_model {
	
public function getdata($key)
	{
		$this->db->where('id',$key);
		$hasil = $this->db->get('wisata');
		return $hasil;

	}
	public function getnama($key){
		$this->db->where('namaw',$key);
		$hasil=$this->db->get('wisata');
		return $hasil;
	}
public function getupdate($key,$data)
{
	$this->db->where('id',$key);
	$this->db->update('wisata',$data);
	//$data['namag']	=$this->input->post('namag');
	$log['namaw']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_wisata',$log);
}

public function getinsert($data)
{
	$this->db->insert('wisata',$data);
	
	$log['namaw']=$this->session->userdata('nlog');
	$log['proses']="insert";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	$this->db->insert('log_wisata',$log);
}


public function getupdate2($key,$data)
{
	$this->db->set('namaw','lokasiw','ketw','longw','latw','linkw');
	$this->db->where('id',$key);
	$this->db->update('wisata',$data);
	$log['namaw']=$this->session->userdata('nlog');
	$log['proses']="update";
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date(" H:i:s");
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	
	
	$this->db->insert('log_wisata',$log);
}



public function getdelete($key)
{
	$this->db->where('id',$key);
	$this->db->delete('wisata');
	$log['nama_lengkap']=$this->session->userdata('nama_lengkap');
	$log['user']=$this->session->userdata('user');
	date_default_timezone_set('Asia/Jakarta');
	$log['tanggal']=date("Y-m-d");
	$log['waktu']=date("H:i:s");
	$log['user']=$this->session->userdata('user');
	$log['id_username']=$this->session->userdata('id_username');
	$log['namaw']=$this->session->userdata('nlog');
	$log['proses']="delete";
	$this->db->insert('log_wisata',$log);
}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */