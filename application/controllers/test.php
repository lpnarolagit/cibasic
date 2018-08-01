<?php

class Test extends CI_Controller{
	public function index(){
		$this->load->view('test');
		$this->load->model('User_model');
		
		$this->load->model('Test_model');
			// $this->Test_model->testMethod();
		$this->load->helper('url');
		// show_404();
		
		
		
	}
	
	public function newfn(){
		$this->load->view('customviews/custviews');
	}
	
	public function addstud(){
		/* $data = array(
			'roll_no' => 13,
			'Name' => 'Lucky'
		);
		$this->db->insert('stud', $data);
		echo "Student inserted"; */
	}
	
	public function updatestud(){
		$data_update = array(
			'Name' => 'Jack'
		);
		$this->db->set($data_update);
		$this->db->where("roll_no", 13);
		// $this->db->update("stud", $data_update);
		echo "Student Updated";
	}
	
}

?>