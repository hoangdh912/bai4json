<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');
	}

	public function index()
	{
		// $oneContact = [
		//     'name' => "kuso1", 
		//     'phone' => "123456789" 
		// ];

		// $manyContact = array();
		// array_push($manyContact, $oneContact);

		// $oneContact2 = [
		//     'name' => "kuso2", 
		//     'phone' => "987654321" 
		// ];

		// array_push($manyContact, $oneContact2);

		// $encodedData = json_encode($manyContact);

		// //Insert data via model
		// $this->load->model('json_model');
		// echo $this->json_model->insertData('contact', $encodedData);

		$result = $this->json_model->showData();

		//json decode
		$result = json_decode($result);
		$result = array('resultArray' => $result);
		$this->load->view('json_view', $result, FALSE);

	}

	public function deleteData($phone)
	{
		// Get data
		$result = $this->json_model->showData();
		$result = json_decode($result);
		// Check array to get the record with phone = $phone
		// If equal use unset() to delete
		foreach ($result as $key => $value) {
			if($value->phone == $phone){
				//delete the record
				unset($result[$key]);
			}
		}
		// Turn array to string
		$result = json_encode($result);
		// After unsetting
		$this->json_model->updateData($result);
		header('Location: ' . base_url() . '/index.php/json');
	}

	public function addData()
	{
		// Get data from view
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');

		// get json from database
		$result = $this->json_model->showData();
		// decode json to get array
		$result = json_decode($result, true);
		// POST array
		$addNew = array(
			'name' => $name,
			'phone' => $phone,
		);
		// push to json array 
		array_push($result, $addNew);

		//encode back to json 
		$result = json_encode($result);

		// add to model
		$this->json_model->updateData($result);
		header('Location: ' . base_url() . '/index.php/json');
	}
}

/* End of file json.php */
/* Location: ./application/controllers/json.php */