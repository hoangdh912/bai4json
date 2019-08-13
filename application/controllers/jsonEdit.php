<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class jsonEdit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('json_model');
		$data = $this->json_model->showData();
		$data = json_decode($data, TRUE);

		$data = [
		    'dataArray' => $data
		];

		$this->load->view('jsonEdit_view', $data, FALSE);


	}

	public function editData()
	{
		$name = $this->input->post('name'); //$name is array
		$phone = $this->input->post('phone');

		// Create json to input 
		$data = array();

		// loop through name and phone to input data
		for ($i = 0; $i < count($name); $i++) {
			$createdData = array();
			$createdData['name'] = $name[$i];
			$createdData['phone'] = $phone[$i];
			array_push($data, $createdData);
		}

		// Put to json
		$data = json_encode($data);

		// Load model to input to db
		$this->load->model('json_model');
		$this->json_model->updateData($data);
		header('Location: ' . base_url() . 'index.php/json');
	}

}

/* End of file jsonEdit.php */
/* Location: ./application/controllers/jsonEdit.php */