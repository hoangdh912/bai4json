<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertData($name, $data)
	{
		// Make an data array
		$dataArray = [
		    'name' => $name,
		    'data' => $data
		];

		$this->db->insert('warehouse', $dataArray);
		return $this->db->insert_id();
	}

	public function showData()
	{
		$this->db->select('*');
		$this->db->where('name', 'contact');
		$result = $this->db->get('warehouse');
		$result = $result->result_array();

		foreach ($result as $value) {
			$showResult = $value['data'];
		}
		return $showResult;
	}

	public function updateData($data)
	{
		$this->db->where('name', 'contact');
		// Create an array
		$result = array(
			'name' => 'contact',
			'data' => $data
		);
		return $this->db->update('warehouse', $result);
	}
}

/* End of file json_model.php */
/* Location: ./application/models/json_model.php */