<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='admin/tampil_admin';
		$isi['judul'] 		='Data Editor';
		$isi['sub_judul']	='Input Editor';
		$isi['cari']		=$this->db->where('user','editor');
		$isi['data']		=$this->db->get('profil_admin');
		$this->load->view('tampilan_home',$isi);
	}

	public function tambah()
	{
		$this->model_keamanan->getkeamanan();
		
		$isi['content'] 	='admin/input_admin';
		$isi['judul'] 		='Data User';
		$isi['sub_judul']	='Input User';
		$this->load->view('tampilan_home',$isi);
	}

	public function simpan()
	{
		$this->model_keamanan->getkeamanan();
		if($this->input->post('password')==$this->input->post('pass')){
			$this->session->set_flashdata('info','password tidak cocok ulang lagi');
			redirect('admin/tambah');
		}
		else{
		$key = $this->input->post('username');
		//dari dbms                   //dari form name
		$data['username']	=$this->input->post('username');
		$data['password']	=md5($this->input->post('password'));
		$data['nama_lengkap']	=$this->input->post('nama_lengkap');
		$data['user']	=$this->input->post('user');
		$data['tempat']	=$this->input->post('tempat');
		$data['tgl_lahir']	=$this->input->post('tgl_lahir');
		$data['jk']	=$this->input->post('jk');
		$data['alamat']	=$this->input->post('alamat');
		$data['email']	=$this->input->post('email');
		$data['website']	=$this->input->post('website');
		$data['no_telp']	=$this->input->post('no_telp');
		$data['foto']	=$this->input->post('foto');
		$this->load->model('model_admin');
		$this->model_admin->getinsert($data);
		$this->session->set_flashdata('info','data sukses disimpan');
		redirect('admin/tambah');
	}
	}

	public function edit()
	{
		$this->model_keamanan->getkeamanan();
		
		$key = $this->uri->segment(3);
		//$data='tidakaktif';
		$this->load->model('model_admin');
		$this->model_admin->getupdate($key);
		redirect('admin');
	}
	public function edit2()
	{
		$this->model_keamanan->getkeamanan();
		$key = $this->uri->segment(3);
		//$data='tidakaktif';
		$this->load->model('model_admin');
		$this->model_admin->getupdate2($key);
		redirect('admin');
	}
public function edit3()
	{
		$this->model_keamanan->getkeamanan();
		
		$key = $this->uri->segment(3);
		//$data='tidakaktif';
		$this->load->model('model_admin');
		$this->model_admin->getupdate3($key);
		redirect('admin');
	}
	public function edit4()
	{
		$this->model_keamanan->getkeamanan();
		$key = $this->uri->segment(3);
		//$data='tidakaktif';
		$this->load->model('model_admin');
		$this->model_admin->getupdate4($key);
		redirect('admin');
	}


	public function delete()
	{
		$this->model_keamanan->getkeamanan();
		
		$this->load->model('model_video');

		$key = $this->uri->segment(3);
		$this->db->where('namav',$key);
		$query = $this->db->get('video');
		if($query->num_rows()>0)
		{
			$this->model_video->getdelete($key);

		}
		redirect('video');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */