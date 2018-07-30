<?php

class Test extends CI_Controller{
	public function index(){
		$this->load->view('test');
		$this->load->model('User_model');
		// show_404();
	}
	
	public function newfn(){
		$this->load->view('customviews/custviews');
	}
}

?>