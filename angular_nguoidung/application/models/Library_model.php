<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Library_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function laydanhsachchouiselect()
	{
		$this->db->select('*');
		$data = $this->db->get('angular_library');
		$data = $data->result_array();
		return $data;
	}
}

/* End of file Library_model.php */
/* Location: ./application/models/Library_model.php */