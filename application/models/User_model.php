<?php
class User_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function callableMethod(){
		echo "<br>called this inside of the model function";
	}
	
	public function testMethod(){
		$this->callableMethod();
		echo "<br>just calling the function of model";
	}
}

?>