<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hello_model extends CI_Model {

	public function getProfile($name) {

		return array("fullName" => " Lohith Sunchu", "age" => 24);
	}

}
?>