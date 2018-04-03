<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_model {

	public function getlogin($u,$p)
	{
		$pwd=md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('profil_admin');
		if ($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$sess= array('username'		=> $row->username,
							'nama_lengkap'	=> $row->nama_lengkap,
							'foto'			=> $row->foto,
							'user'=>$row->user,
							'akun'=>$row->akun,
							'tempat'=>$row->tempat,
							'tgl_lahir'=>$row->tgl_lahir,
							'jk'=>$row->jk,
							'alamat'=>$row->alamat,
							'email'=>$row->email,
							'website'=>$row->website,
							'no_telp'=>$row->no_telp,
							'id_username'=>$row->id_username);
				if($sess['akun']=='aktif'){
					$this->session->set_userdata($sess);
					redirect('home');
				}
				else{
					$this->session->set_flashdata('info','maaf akun non aktif harap hubungi admin');
					redirect('login');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('info','maaf username atau password salah');
			redirect('login');
		}
	}
}
