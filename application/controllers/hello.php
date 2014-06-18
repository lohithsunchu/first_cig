<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Hello extends CI_Controller {


	public function index () {
		//
		echo "Hello this is my  index page";
	}
	public function one($name) {
		
		$this->load->model("hello_model","mode"); // model("modelname","alias name");

		$profile = $this->mode->getProfile("min");

		/*print_r($profile);*///for debugging

		
		$this->load->view("header");
		$data = array("n" => $name);

		$data["profile"] = $profile;
		$this->load->view("one", $data); 
	}
	public function two(){
		//
		echo "This is two";
	}
} 
?>
