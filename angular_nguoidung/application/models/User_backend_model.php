<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_backend_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();	
	}

	public function inserUser($data)
	{
		$this->db->insert('user_backend', $data);
		return $this->db->insert_id();
	}

	public function checkLogin($user,$pass)
	{
		$this->db->select('*');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$this->db->where('level', 1);
		$data = $this->db->get('user_backend');
		$data = $data->result_array();
		return $data;
	}

	public function getUserData()
	{
		$this->db->select('*');
		$data = $this->db->get('user_backend');
		$data = $data->result_array();
		$mangmoi = array();
		foreach ($data as $val) {
			$val['createdate'] = date('d/m/Y', $val['createdate']);
			array_push($mangmoi, $val);
		}
	
		return $mangmoi;
	}

	public function updateUserData($id,$username,$email,$level)
	{
		$data = array(
			'username' => $username,
			'email' => $email,
			'level' => $level
		);
		$this->db->where('id', $id);
		return $this->db->update('user_backend', $data);
	}

}

/* End of file User_backend_model.php */
/* Location: ./application/models/User_backend_model.php */