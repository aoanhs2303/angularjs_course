<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nguoidung extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Nguoidung_model');
	}

	public function index()
	{
		
		$this->load->view('nguoidung_view');

	}

	public function laydulieu()
	{
		$dl = $this->Nguoidung_model->getData();
		$dl = json_encode($dl);
		echo $dl;
	}

	public function luudulieu()
	{
		$id = $this->input->post('id');
		$ten = $this->input->post('ten');
		$facebook = $this->input->post('facebook');
		$sdt = $this->input->post('sdt');
		$namsinh = $this->input->post('namsinh');
		echo $this->Nguoidung_model->updateById($id, $ten, $facebook, $sdt, $namsinh);
	}

}

/* End of file nguoidung.php */
/* Location: ./application/controllers/nguoidung.php */