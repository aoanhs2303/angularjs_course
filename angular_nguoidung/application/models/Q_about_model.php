<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Q_about_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAboutData()
	{
		$this->db->select('*');
		$dl = $this->db->get('aboutpage');
		$dl = $dl->result_array();
		return $dl;
	}

	public function updateDataById($id,$tieude,$tieudephu,$noidung,$anh)
	{
		$this->db->where('id', $id);
		$data = array(
			'tieude' => $tieude,
			'tieudephu' => $tieudephu,
			'noidung' => $noidung,
			'anh' => $anh
		);
		$this->db->update('aboutpage', $data);
		if($this->db->affected_rows() > 0) {
			echo 'thanhcong';
		} else {
			echo 'thatbai';
		}
	}

}

/* End of file Q_about_model.php */
/* Location: ./application/models/Q_about_model.php */