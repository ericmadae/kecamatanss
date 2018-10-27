<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function lihatuser($username)
	{
		return $this->db->get_where('tb_login', array('username' => $username))->row();
	}
	public function updateuser($id, $data)
	{
	$this->db->where('id', $id);
	$query = $this->db->update('tb_login', $data);
	}

}

/* End of file m_dashboard.php */
/* Location: ./application/models/m_dashboard.php */