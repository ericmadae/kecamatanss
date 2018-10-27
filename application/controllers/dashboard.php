<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "online") {
			redirect('login');			
		}
		$this->load->model('m_dashboard');

	}

	public function index()
	{
		
		$this->template->load('template', 'v_dashboard');

	}
	public function setting()
	{
		$username = $this->session->userdata('username');
		
		$data['user'] = $this->m_dashboard->lihatuser($username);
		$this->load->view('v_ubah', $data);
	}
	public function ubahuser()
	{
		$password = $this->input->post('password');
		$password1 = $this->input->post('password1');
		if ($password != $password1) {
		$this->session->set_flashdata('salah', 'Konfirmasi password salah');
		redirect('dashboard/setting');
		}
		$id = $this->input->post('id');
		$data = array(
		'username' => $this->input->post('username'),
		'password' => md5($password)
	);
		$this->m_dashboard->updateuser($id, $data);
		redirect('dashboard');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */