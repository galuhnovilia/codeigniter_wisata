<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_model {
	
public function getdata($key)
	{
		$this->db->where('namav',$key);
		$hasil = $this->db->get('video');
		return $hasil;
	}

public function getupdate($key)
{
	$this->db->set('akun','nonaktif');
	$this->db->where('id_username',$key);
	//$data="tidakaktif";
	$this->db->update('profil_admin');
}
public function getupdate2($key)
{
	$this->db->set('akun','aktif');
	$this->db->where('id_username',$key);
	//$data="tidakaktif";
	$this->db->update('profil_admin');
}
public function getupdate3($key)
{
	$this->db->set('jk','Wanita');
	$this->db->where('id_username',$key);
	//$data="tidakaktif";
	$this->db->update('profil_admin');
}
public function getupdate4($key)
{
	$this->db->set('jk','Pria');
	$this->db->where('id_username',$key);
	//$data="tidakaktif";
	$this->db->update('profil_admin');
}

public function getinsert($data)
{
	$this->db->set('akun','aktif');
	$this->db->insert('profil_admin',$data);
}

public function getdelete($key)
{
	$this->db->where('namav',$key);
	$this->db->delete('video');
}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */