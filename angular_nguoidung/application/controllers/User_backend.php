<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_backend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_backend_model');
	}

	public function index()
	{
		
	}

	public function addUser()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$data = array(
			'username' => $username,
			'password' => $password,
			'email' => $email,
			'level' => $level
		);
		if($this->User_backend_model->inserUser($data)){
			echo 1;
		}
	}

	public function login()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$data = $this->User_backend_model->checkLogin($user,$pass);
		if($data) {
			$this->session->userdata('user',$user);
			echo 1;
		} else {
			echo 0;
		}
	}

	public function APIUserData()
	{
		$data = $this->User_backend_model->getUserData();
		$data = json_encode($data);
		echo $data;
	}

	public function APIUpdateUser()
	{
		$id       = $this->input->post('id');
		$username = $this->input->post('username');
		$email    = $this->input->post('email');
		$level    = $this->input->post('level');
		if($this->User_backend_model->updateUserData($id,$username,$email,$level)){
			echo 1;
		} else {
			echo 0;
		}

	}

}

/* End of file User_backend.php */
/* Location: ./application/controllers/User_backend.php */