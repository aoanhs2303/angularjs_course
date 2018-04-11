<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Library extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Library_model');
	}

	public function index()
	{
		$dl = $this->Library_model->laydanhsachchouiselect();
		$dl = json_encode($dl);
		echo $dl;
	}

}

/* End of file Library.php */
/* Location: ./application/controllers/Library.php */