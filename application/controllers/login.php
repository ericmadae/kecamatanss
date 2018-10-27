<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
			if ($this->session->userdata('status') == "online") {
			redirect('dashboard');			
		}	
		$this->load->model('m_login');
	
	}

	public function index()
	{
		$this->load->view('v_login');
	}
	function aksi_login(){
			$username = $this->input->post('username');
			$jabatan = $this->input->post('jabatan');
			$password = $this->input->post('password');
			$where = array(
				'username' => $username,
				'jabatan' => $jabatan,
				'password' => md5($password)
				);
			$cek = $this->m_login->cek_login($where)->num_rows();
			if($cek > 0){
	 
				$data_session = array(
					'username' => $username,
					'jabatan' => $jabatan,
					'status' => "online"
					);
	 
				$this->session->set_userdata($data_session);
	 
				redirect('dashboard');
	 
			}else{
				$this->session->set_flashdata('error', 'username dan password salah');
				redirect('login');
			}
		}
	 
		function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */