<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_account extends CI_Controller {

	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['content'] 	='vCangePassword';
		$isi['judul'] 		='Password';
		$isi['sub_judul']	='Ubah Password';
		$isi['data']		=$this->db->get('profil_admin');
		$this->load->view('tampilan_home',$isi);
	}
		public function change_password(){
		$this->model_keamanan->getkeamanan();
		$isi['content'] ='vCangePassword';
		$isi['judul']='User';
		$isi['sub_judul']='Ubah Password';
		$this->load->model("page_handler");
		$this->page_handler->member_page();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('cur_pw', 'Current Password', 'required');
		$this->form_validation->set_rules('new_pw', 'New Password', 'required|max_length[20]|min_length[4]');
		$this->form_validation->set_rules('conf_pw', 'Confrim Password', 'required|matches[new_pw]');
		if($this->form_validation->run() !=true)
		{
			$this->session->set_flashdata("info","Password salah");
			$this->load->view('tampilan_home',$isi);
		} else {
			$sql = $this->db->select("*")->from("profil_admin")->where("username",$this->session->userdata('username'))->get();
			foreach ($sql ->result() as $my_info) {
				$db_password =$my_info->password;
				$db_id = $my_info->id_username;
			}
			$pwd=md5($this->input->post("cur_pw"));
			if ($pwd==$db_password){
				$fixed_pw = mysql_real_escape_string($this->input->post("new_pw"));
				$key = $db_id;
				$fix_pw=md5($fixed_pw);
				$data = array('password' => $fix_pw);
				$this->db->where('id_username', $db_id);
				$this->db->update('profil_admin', $data); 
				$this->session->set_flashdata("info","Password berhasil di updated");
				redirect(base_url(),"refresh");
			} else{
				
				$this->session->set_flashdata("info","Password salah!");
				$this->load->view('tampilan_home',$isi);
			}
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */