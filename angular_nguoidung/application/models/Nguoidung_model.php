<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nguoidung_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getData()
	{
		$this->db->select('*');
		$dl = $this->db->get('nguoidung');
		$dl = $dl->result_array();
		return $dl;
	}

	public function updateById($id, $ten, $facebook, $sdt, $namsinh)
	{
		$this->db->where('id', $id);
		$data = array(
			'ten' => $ten,
			'facebook' => $facebook,
			'sdt' => $sdt,
			'namsinh' => $namsinh		
		);
		$this->db->update('nguoidung', $data);
		if($this->db->affected_rows() > 0) {
			echo 'thanhcong';
		} else {
			echo 'Thất bại';
		}
	}

}

/* End of file Nguoidung_model.php */
/* Location: ./application/models/Nguoidung_model.php */