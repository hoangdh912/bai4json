<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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

		//Insert data via model
		// $this->load->model('json_model');
		// echo $this->json_model->insertData('contact', $encodedData);

		$this->load->model('json_model');
		$result = $this->json_model->showData();
		$result = array('resultArray' => $result);
		//json decode

		$result = json_decode($result);
		$this->load->view('json_view', $result, FALSE);

	}

}

/* End of file json.php */
/* Location: ./application/controllers/json.php */