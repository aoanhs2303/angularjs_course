<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Q_about extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Q_about_model');
	}

	public function index()
	{
		$this->load->view('about_view');
	}

	public function layDuLieuAbout()
	{
		$data = $this->Q_about_model->getAboutData();
		$data = json_encode($data);
		echo $data;
	}

	public function luuDuLieu()
	{
		$id = $this->input->post('id');
		$tieude = $this->input->post('tieude');
		$tieudephu = $this->input->post('tieudephu');
		$noidung = $this->input->post('noidung');
		$anh = $this->input->post('anh');

		if($this->Q_about_model->updateDataById($id,$tieude,$tieudephu,$noidung,$anh)){
			return 'thanhcong';
		} else {
			return 'thatbai';
		}

	}

}

/* End of file Q_about.php */
/* Location: ./application/controllers/Q_about.php */